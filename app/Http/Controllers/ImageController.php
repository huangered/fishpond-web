<?php

namespace fishpond\Http\Controllers;

use Illuminate\Http\Request;

use fishpond\Http\Requests;
use fishpond\ImageList;

class ImageController extends Controller
{
	public function index() {
		$imgs=ImageList::all();
		return view('photos.index')->with('photos', $imgs);
	}

	public function show($id){
		\Log::info($id);
		$photos = ImageList::find($id);
		return view('photos.show')->with('photos', $photos);
	}
	
	public function create(){
		return view('photos.create');
	}
	
	public function edit($id){
	}

	public function update() {
	}

	public function store(Request $request) {
		$f=$request->file('photo');
		$name=$f->getClientOriginalName();
		\Log::info($name);
		$path="./".\Auth::user()->id."/".$name;
		\Log::info($path);
		$photo=new ImageList(array(
			'user_id' => \Auth::user()->id,
			'name' => $name,
			'description'=> '',
			'path'=>$path,
			'good' => 0,
			'bad' =>0
		));
		$photo->save();
		\Image::make($f)->save($photo->path);
		\Log::info($photo);
		return \Redirect::route('photo.index');
	}

}