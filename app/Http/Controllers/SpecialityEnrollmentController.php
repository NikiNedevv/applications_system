<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Speciality;
use App\Subject;
use App\SpecialityEnrollment;
use App\Exam;
use Auth;


class SpecialityEnrollmentController extends Controller
{
	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 public function index()
	 {
       $enrollments = SpecialityEnrollment::with('user','exam','exam.subject')->get();
      
       return view('admin.enrollments', compact('enrollments')); 
	 }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
        $specialities = Speciality::all();
        
        return view('user.enrollment_create', compact('specialities'));
     }

     public function ajaxExams(Request $request){
        if($request->subject_request > 0){
            $speciality_id = $request->speciality_id;
            $subjects = Subject::with('specialities')->whereHas('specialities',function($q) use ($speciality_id){
                $q->where('speciality_id',$speciality_id);
            })->get()->toArray();

            return response()->json($subjects);
        }
        $exams = Exam::where('subject_id',$request->subject_id)->get()->toArray();

        return response()->json($exams);
     }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEnrollment = new SpecialityEnrollment;
        $newEnrollment->user_id = Auth::user()->id;
        $newEnrollment->exam_id = $request->exam;
        $newEnrollment->session_num = $request->session;
        $newEnrollment->save();

        return 'success'; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updEnrollment = SpecialityEnrollment::find($id);
        $updEnrollment->score = $request->grade;
        $updEnrollment->save();

        return back()->with('success','Successfully edited enrolment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialitiesEnrollments = SpecialityEnrollment::find($id);

        $specialitiesEnrollments->delete();

        return back()->with('success','Successfully deleted enrolment');
    }
}
