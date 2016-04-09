<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Http\Requests\ProfileFormRequest;

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

	public function edit($id){
       $profile = User::find($id)->profile;
       return view('profiles.edit')->with('profile', $profile);
	}

	public function update($id, ProfileFormRequest $request){
		$profile = User::find($id)->profile;
		$profile->update([
				'telephone' => $request->get('telephone'),
				'location' => $request->get('location'),
				'job' => $request->get('job')
			]);
		return \Redirect::route('people.show', array($id));
	}

	public function store(ProfileFormRequest $request){
		\Log::info("store");
	}
}
