<?php

namespace fishpond;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $fillable = [
        'name', 'telephone','location','job'
    ];
    public function user()
    {
      return $this->belongsTo('fishpond\User');
    }
}
