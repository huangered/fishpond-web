<?php

namespace fishpond\Http\Controllers;

use Illuminate\Http\Request;

use fishpond\Http\Requests;

class BodyController extends Controller
{
    public function index() {
        return view('bodies.index');
    }

    public function show($id){
        $body = User::find($id)->body;
        return view('bodies.show')->with('body', $body);
    }

    public function edit($id){
        $body = User::find($id)->body;
        return view('bodies.edit')->with('body', $body);
    }

    public function update($id, BodyFormRequest $request){
        $body = User::find($id)->body;
        $body->update([
            'bust' => $request->get('bust'),
            'waist' => $request->get('waist'),
            'upperarm' => $request->get('upperarm')
        ]);
        return \Redirect::route('body.show', array($id));
    }

    public function store(BodyFormRequest $request){
        \Log::info("store");
    }
}
