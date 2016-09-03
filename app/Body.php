<?php

namespace fishpond;

use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    //
    private $rules = [
        'user_id' => 'required',
        'bust' => 'required',
        'waist' => 'required',
        'upperarm' => 'required'
    ];

    protected $fillable = ['user_id', 'bust', 'waist', 'upperarm' ];

    public function user()
    {
        return $this->belongsTo('fishpond\User');
    }
}
