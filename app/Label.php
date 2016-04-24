<?php

namespace fishpond;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $fillable = [
        'name'
    ];

    public function Documents()
    {
        return $this->belongsToMany('fishpond\Document')->withTimestamps();
    }
}
