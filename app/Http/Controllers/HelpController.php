<?php

namespace fishpond\Http\Controllers;

use Illuminate\Http\Request;

use fishpond\Http\Requests;
use fishpond\Http\Requests\ProfileFormRequest;

use fishpond\User;

class HelpController extends Controller
{
	public function index() {
		return view('helps.index');
	}
}
