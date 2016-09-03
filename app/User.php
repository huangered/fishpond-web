<?php

namespace fishpond;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
class User extends Authenticatable
{
     use EntrustUserTrait {
     	EntrustUserTrait::can as may;
     }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getUsername()
    {
	    return strtolower($this->username);
    }

    public function profile()
    {
	    return $this->hasOne('fishpond\Profile');
    }

    public function body(){
        return $this->hasOne('fishpond\Body');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities()
    {
        return $this->hasMany('fishpond\Activity');
    }

    public function documents() {
        return $this->hasMany('fishpond\Document');
    }

    public function images() {
        return $this->hasMany('fishpond\Image');
    }
}
