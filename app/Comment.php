<?php

namespace fishpond;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    private $rules=[
        'user_id' => 'required',
        'image_id' => 'required',
        'message' => 'required'
    ];

    protected $fillable=['user_id', 'image_id', 'message'];

    public function user()
    {
        return $this->belongsTo('fishpond\User');
    }
}
