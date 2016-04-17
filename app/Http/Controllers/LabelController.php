<?php

namespace fishpond\Http\Controllers;

use Illuminate\Http\Request;

use fishpond\Http\Requests;
use fishpond\Label;

class LabelController extends Controller
{
    //
    public function index(){
        $ls = Label::all();

        return $ls;
    }

    public function store() {
        return true;
    }

    public function destroy($id){
        $l = Label::find($id);
        $l->delete();
        return 'true';
    }
}
