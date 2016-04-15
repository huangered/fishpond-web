<?php

namespace fishpond\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use fishpond\User;
use fishpond\Admin;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Admin $admin) 
    {
       return true;
    }
}
