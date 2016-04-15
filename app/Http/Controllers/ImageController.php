<?php

namespace fishpond\Http\Controllers;

use Illuminate\Http\Request;

use fishpond\Http\Requests;
use fishpond\ImageList;

class ImageController extends Controller
{
	public function index() {
		$img1 = new ImageList(array(
			'user_id' => 1,
			'name' => 'name1',
	       	'description' => 'dddd',
		    'path' => 'rrr',
		    'good' => 10,
		    'bad' => 20
		     ));

		$img2 = new ImageList(array(
			'user_id' => 1,
			'name' => 'name2',
	       	'description' => 'ggg',
		    'path' => 'eeeee',
		    'good' => 10,
		    'bad' => 20
		     ));
		$imgs=array($img1, $img2, $img1, $img1, $img1);

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
		dd($f->getClientOriginalName());
		\Image::make($f)->resize(300, 200)->save('foo.jpg');
	}

}