<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $fillable = [
        'name', 'telephone','location','job'
    ];
    public function user()
    {
      return $this->belongsTo('todoparrot\User');
    }
}
