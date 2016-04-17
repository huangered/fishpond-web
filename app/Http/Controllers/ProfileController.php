<?php

namespace fishpond\Http\Controllers;

use fishpond\Activity;
use Illuminate\Http\Request;

use fishpond\Http\Requests;
use fishpond\Http\Requests\ProfileFormRequest;

use fishpond\User;

class ProfileController extends Controller
{
	public function index() {
		return view('profiles.index');
	}

    public function show($id){
		\Log::info($id);
		$user = User::find($id);
		$acts = Activity::where('user_id', '=', $id)->get();
		return view('profiles.show')->with('user', $user)->with('acts', $acts);
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
