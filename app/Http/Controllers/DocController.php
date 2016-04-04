<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;

use todoparrot\Document;
use todoparrot\Http\Requests\DocumentFormRequest;

// the controller to list document
class DocController extends Controller
{
    public function index(){
	       $docs = Document::all();
	       return view('docs.index')->with('docs',$docs);
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
