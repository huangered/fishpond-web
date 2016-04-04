<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Todolist;
use todoparrot\Http\Requests\ListFormRequest;

class ListsController extends Controller
{
	public function index(){
	       $lists = Todolist::all();
	       return view('lists.index')->with('lists',$lists);
	}

	public function create(){
	       return view('lists.create');
	}
	public function store(ListFormRequest $request){
	       $list = new Todolist(array(
	       	     'name'=>$request->get('name'),
		     'description' => $request->get('description')
		     ));
	       $list->save();	  
	       return \Redirect::route('lists.index');
	}
	public function show($id){

	       $list = Todolist::find($id);
	       return view('lists.show')->with('list',$list);
	}

	public function edit($id){
	       $list = Todolist::find($id);
	       return view('lists.edit')->with('list',$list);
	}

	public function update($id){}
	public function destroy($id){
	       $list = Todolist::find($id);
	       $list->delete();
	       return \Redirect::route('lists.index');
	}
}
