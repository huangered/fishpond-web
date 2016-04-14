<?php

namespace todoparrot\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use todoparrot\User;
use todoparrot\Admin;

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
