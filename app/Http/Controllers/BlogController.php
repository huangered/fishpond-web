<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;

class BlogController extends Controller
{
    public function category($category)
    {
	dd($category);
	return view('blog.category')->with('category',$category);
    }
}
