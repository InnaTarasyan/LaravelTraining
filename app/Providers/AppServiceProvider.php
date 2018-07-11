<?php

namespace App\Providers;

use App\Application;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use Blade;
use Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Blade::directive('set', function ($exp){
            list($name, $val) = explode(',', $exp);
            return "<?php $name = $val ?>";
        });

        // By default we have this model events
//        User::creating(function ($user){
//
//        });


        Application::created( function($application){
            Log::info('Application added to database ', [$application->user->name => $application->name]);
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
