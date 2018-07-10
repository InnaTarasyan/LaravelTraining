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

//        $obj = new SaveFile();
//        $this->app->instance('App\Helpers\Contracts\SaveStr', $obj);



        // replaced 'App\Helpers\Contracts\SaveStr with SaveStr
        $this->app->bind('SaveStr', function(){
        return new SaveEloquentOrm();

            // return new SaveFile(); -> will store to the file
        });

        // when using only one instance
//        $this->app->singleton('App\Helpers\Contracts\SaveStr', function(){
//            return new SaveEloquentOrm();
//
//            // return new SaveFile(); -> will store to the file
//        });


//        $this->app->bind('App\Helpers\Contracts\SaveStr', 'App\Helpers\SaveFile');
    }
}
