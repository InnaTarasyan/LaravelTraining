<?php
namespace App\Helpers;

use App\Application;
use App\Events\onAddApplicationEvent;
use App\Helpers\Contracts\SaveStr;
use Request;
use App\Http\Requests\ApplicationRequest;
use Event;
use Auth;


class SaveEloquentOrm implements SaveStr {

    public static function save(ApplicationRequest $request, Application $application){

        if($request->user()->applications()->save($application)){

            Event::fire(new onAddApplicationEvent($application, Auth::user()));

            // event(new onAddApplicationEvent($application, Auth::user())); --> alternative

            return ['status' => 'Приложение Добавлено!'];
        }

        return ['status' => 'error'];
    }


}