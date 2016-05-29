<?php

namespace fishpond;

use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    protected $fillable = [
        'name', 'email','suggest', 'fixed'
    ];
}
