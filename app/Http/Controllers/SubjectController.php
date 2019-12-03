<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Speciality;
use App\SubjectSpeciality;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
        $subjects = Subject::with('specialities')->get();
        return view ('subjects.index', compact('subjects'));
      
     }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
        $specialities = Speciality::all();
           if($specialities){
                $specialities_arr = $specialities->pluck('name', 'id');
            }else{
                $specialities_arr = [];
            }

       return view('subjects.create', compact('specialities_arr'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subject = Subject::create([
                    'name' => $request->subject_name, 
                    ]);
        foreach($request->speciality_id as $spec){
            SubjectSpeciality::create([
                'speciality_id' => $spec,
                'subject_id' => $subject->id
            ]);
        }

        return redirect()->route('subjects.index')
                ->withMessage('Subject created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $subject = Subject::find($id);

       return view('subjects.show', compact('subject'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
