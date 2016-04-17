<?php

namespace fishpond;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
    ];

    public function user()
    {
        return $this->belongsTo('fishpond\User');
    }
}
