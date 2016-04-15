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
}
