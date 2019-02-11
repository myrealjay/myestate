<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personaldata;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=\Auth::user();
        $data=personaldata::where('userid',$user->id)->get()->first();
        if(!$data){
            return view('personaldatas.create');
        }
        return view('home');
    }
}
