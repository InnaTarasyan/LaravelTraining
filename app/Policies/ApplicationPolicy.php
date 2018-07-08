<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ApplicationPolicy
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
        return $user->canDo('VIEW_APPLICATIONS');
    }

    public function add(User $user){
        return $user->canDo('ADD_APPLICATIONS');
    }

    public function update(User $user){
        return $user->canDo('UPDATE_APPLICATIONS');
    }

    public function delete(User $user){
        return $user->canDo('DELETE_APPLICATIONS');
    }

}
