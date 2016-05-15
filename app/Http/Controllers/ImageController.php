<?php

namespace fishpond\Http\Controllers;

use Illuminate\Http\Request;

use fishpond\Http\Requests;
use fishpond\Image;
use fishpond\Comment;
use fishpond\Label;

class ImageController extends Controller
{
	public function index() {
		$imgs = Image::all();
		$labels = Label::all();
		return view('photos.index')->with('photos', $imgs)->with('labels', $labels);
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

	public function destroy($id) {
		Image::destroy($id);
		return \Redirect::route('photo.index');
	}

	public function store(Request $request) {
		$f=$request->file('photo');
		$name=$f->getClientOriginalName();
		\Log::info($name);
		$path=\Auth::user()->id."/".$name;
		\File::makeDirectory('./'.\Auth::user()->id, 0775, true, true);
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