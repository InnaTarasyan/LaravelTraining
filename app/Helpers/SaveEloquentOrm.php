<?php
namespace App\Helpers;

use App\Application;
use App\Helpers\Contracts\SaveStr;
use Request;
use App\Http\Requests\ApplicationRequest;


class SaveEloquentOrm implements SaveStr {

    public static function save(ApplicationRequest $request, Application $application){

        if($request->user()->applications()->save($application)){
            return ['status' => 'Приложение Добавлено!'];
        }

        return ['status' => 'error'];
    }


}