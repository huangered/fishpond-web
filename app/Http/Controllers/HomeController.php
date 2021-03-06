<?php

namespace fishpond\Http\Controllers;

use fishpond\Http\Requests;
use Illuminate\Http\Request;

use fishpond\Activity;

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
        $activities = Activity::all();
        return view('home')->with('acts', $activities);
    }

    public function intro()
    {
        return view('intro/index');
    }
}
