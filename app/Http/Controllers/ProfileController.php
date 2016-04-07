<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\User;

class ProfileController extends Controller
{
	public function index() {
		return view('profiles.index');
	}

    public function show($id){
		\Log::info($id);
		$user = User::find($id);
		return view('profiles.show')->with('user', $user);
	}
}
