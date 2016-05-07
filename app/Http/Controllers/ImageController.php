<?php

namespace fishpond\Http\Controllers;

use Illuminate\Http\Request;

use fishpond\Http\Requests;
use fishpond\Image;
use fishpond\Comment;

class ImageController extends Controller
{
	public function index() {
		$imgs=Image::all();
		return view('photos.index')->with('photos', $imgs);
	}

	public function show($id){
		$photo = Image::find($id);
		return view('photos.show')->with('photo', $photo);
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
		$path=\Auth::user()->id."/".$name;
		\Log::info($path);
		$photo=new Image(array(
			'user_id' => \Auth::user()->id,
			'name' => $name,
			'description'=> '',
			'path'=>$path,
			'good' => 0,
			'bad' =>0
		));
		$photo->save();
		\ImageUtil::make($f)->save($photo->path);
		\Log::info($photo);
		return \Redirect::route('photo.index');
	}

    public function comments($id) {
        $img = Image::find($id);
        $comments = $img->comments()->get();
        return \Response::json($comments);
    }


    public function addComment($id, Request $request) {
		$img = Image::find($id);
		$comment = new Comment();
        $comment->message = $request->get('message');
        $comment->user_id = \Auth::user()->id;
        $img->comments()->save($comment);
		return "ok";
	}
}