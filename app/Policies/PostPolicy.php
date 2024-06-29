<?php

namespace App\Policies;

use App\Models\User;

class PostPolicy
{
 

    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }


    public function before(User $user,string $ability): bool|null
    {

        if ($user->is_admin) {

            return true;
        }

        return false;
    }

    
}
