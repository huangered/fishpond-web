<?php

namespace fishpond;

use Illuminate\Database\Eloquent\Model;

class ImageList extends Model
{
    protected $fillable = [
        'user_id', 'name', 'description', 'path', 'good', 'bad',
    ];
}