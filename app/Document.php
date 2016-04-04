<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    private $rules=[
		'title' => 'required',
		'author' => 'required',
		'content' => 'required'
		];
	protected $fillable=['title', 'author', 'content'];
}
