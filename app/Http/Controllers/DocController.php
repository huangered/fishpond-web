<?php

namespace fishpond\Http\Controllers;

use Illuminate\Http\Request;

use fishpond\Http\Requests;

use fishpond\Document;
use fishpond\Http\Requests\DocumentFormRequest;
use fishpond\Message;
// the controller to list document
class DocController extends Controller
{
    public function index(){
	       $docs = Document::all();
	      	
	       $message = new Message;
	       return view('docs.index')->with('docs',$docs)->with('message',$message);
	}

	public function create(){
	       return view('docs.create');
	}
	public function store(DocumentFormRequest $request){
	       $docs = new Document(array(
	       	     'title' => $request->get('title'),
	       	     'author' => $request->get('author'),
		         'content' => $request->get('content')
		     ));
	       $docs->save();
	       return \Redirect::route('article.index');
	}
	public function show($id){
		\Log::info($id);
	       $doc = Document::find($id);
	       return view('docs.show')->with('doc',$doc);
	}

	public function edit($id){
	       $docs = Document::find($id);
	       return view('docs.edit')->with('docs',$docs);
	}

	public function update($id){}
	public function destroy($id){
	       $docs = Document::find($id);
	       $docs->delete();
	       return \Redirect::route('docs.index');
	}
}
