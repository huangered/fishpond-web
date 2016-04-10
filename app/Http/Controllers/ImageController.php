<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\ImageList;

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

	public function edit($id){
	}

	public function update() {
	}

	public function store() {
	}

}