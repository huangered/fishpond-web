<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;

class WelcomeController extends Controller
{
    function index()
    {
	$data = array('name' => 'huangp6',
		      'date' => date('Y-m-d'));
        $lists = array('vacation','shopping','trip');
	return view('welcome')->with($data)->with('lists',$lists);
    }
}
