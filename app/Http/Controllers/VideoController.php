<?php

namespace fishpond\Http\Controllers;

use Illuminate\Http\Request;

use fishpond\Http\Requests;

class VideoController extends Controller
{
    //
    public function index() {
        \Log::info("list all video");
        $dir = "/Users/huangered/Desktop/fishpond-web/public";
        $files = scandir($dir);
        return view('videos.index')->with('videos', $files);

    }

    public function show($name){
        \Log::info("get video $name");
        return view('videos.show')->with('name',$name);
    }

}
