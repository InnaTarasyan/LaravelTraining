<?php

namespace App\Providers;

use App\Helpers\SaveEloquentOrm;
use Illuminate\Support\ServiceProvider;
use App\Helpers\SaveFile;

class SaveStrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Helpers\Contracts\SaveStr', function(){
            return new SaveEloquentOrm();

            // return new SaveFile(); -> will store to the file
        });
    }
}
