<?php

namespace fishpond;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	private $rules=[
		'title' => 'required',
		'author' => 'required',
		'content' => 'required'
		];
	protected $fillable=['title', 'author', 'content'];

	public function labels()
	{
		return $this->belongsToMany('fishpond\Label')->withTimestamps();
	}
}
