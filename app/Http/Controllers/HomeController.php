<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $isAdmin = Auth::user()->isAdmin();
        if($isAdmin){
            $usersCount = User::all()->count();
            $unApproved = User::whereNULL('approved')->get()->count();
            return view('admin.home',['usersCount' => $usersCount,'unApproved' => $unApproved]);
        }
        return view('user.home');
    }
}
