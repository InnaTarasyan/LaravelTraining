<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;
use App\Policies\UserPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Application' => 'App\Policies\ApplicationPolicy',
        'App\User' => 'App\Policies\UserPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // This is an alternative way!
        /*
        Gate::define('VIEW_USERS', function($user){
            return $user->canDo('VIEW_USERS', true);
        });

        Gate::define('ADD_USERS', function($user){
            return $user->canDo('ADD_USERS', true);
        });

        Gate::define('UPDATE_USERS', function($user){
            return $user->canDo('UPDATE_USERS', true);
        });

        Gate::define('DELETE_USERS', function($user){
            return $user->canDo('DELETE_USERS', true);
        });
        */
    }
}
