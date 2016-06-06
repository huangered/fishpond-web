<?php

namespace fishpond\Http\Controllers;

use Illuminate\Http\Request;

use fishpond\Http\Requests;

use fishpond\Document;
use fishpond\Http\Requests\DocumentFormRequest;
use fishpond\Message;
use fishpond\Label;

// the controller to list document
class DocController extends Controller
{
    public function index(Request $request)
	{
		if ($request->label!=null) {
			$docs = Label::find($request->label)->documents()->get();
		}else {
			$docs = Document::orderBy('created_at', 'DESC')->get();
		}
		$message = new Message;

		$labels = Label::all();
		return view('docs.index')->with('docs',$docs)->with('message',$message)->with('labels', $labels);
	}

	public function create(){
		$labels = Label::all();
		return view('docs.create')->with('labels', $labels);
	}
	public function store(DocumentFormRequest $request){
		$labelArr =  explode(",", $request->tags);

		$user = \Auth::user();
		$docs = new Document(array(
			'title' => $request->get('title'),
			'author' => $user->name,
			'content' => $request->get('content'),
			'user_id' => $user->id));
        $docs->save();
		// add & to change arr value
		foreach ($labelArr as &$value) {
			if (!is_numeric($value)) {
				$l = new Label();
				$l->name=$value;
				$l->save();
				$value=$l->id;
			} else{
				$value=intval($value);
			}

		}
		unset($value); // remove the $ reference
		$docs->labels()->attach($labelArr);
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
