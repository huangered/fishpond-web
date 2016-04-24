<?php

namespace fishpond\Http\Controllers;

use Illuminate\Http\Request;

use fishpond\Http\Requests;
use fishpond\Label;

class LabelController extends Controller
{
    //
    public function index(){
        $labels = Label::all();

        return view("labels.index")->with("labels", $labels);
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
