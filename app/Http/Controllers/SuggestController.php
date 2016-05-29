<?php

namespace fishpond\Http\Controllers;

use Illuminate\Http\Request;

use fishpond\Http\Requests;
use fishpond\Http\Requests\SuggestFormRequest;

use fishpond\Suggest;



class SuggestController extends Controller
{
    public function index() {
        $suggests = Suggest::all();
        return view('suggests.index')->with('suggests', $suggests);
    }

    public function show($id){

    }

    public function edit($id){
    }

    public function update($id){
    }

    public function store(SuggestFormRequest $request){
        $s = new Suggest(array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'suggest' => $request->get('suggest'),
            'fixed' => false));
        $s->save();
        $ss = Suggest::all();
        return view('suggests.index')->with('suggests', $ss);
    }
}
