<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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

    public function view(User $user){
        return $user->canDo('VIEW_USERS');
    }

    public function save(User $user){
        return $user->canDo('ADD_USERS');
    }

    public function edit(User $user){
        return $user->canDo('UPDATE_USERS');
    }

    public function destroy(User $user){
        return $user->canDo('DELETE_USERS');
    }
}
