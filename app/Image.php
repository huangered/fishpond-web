<?php

namespace fishpond;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'user_id', 'name', 'description', 'path', 'good', 'bad',
    ];

    public function user() {
        return $this->belongsTo('fishpond\User');
    }

    public function comments() {
        return $this->hasMany('fishpond\Comment');
    }
}