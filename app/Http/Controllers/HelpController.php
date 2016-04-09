<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Http\Requests\ProfileFormRequest;

use todoparrot\User;

class HelpController extends Controller
{
	public function index() {
		return view('helps.index');
	}
}
