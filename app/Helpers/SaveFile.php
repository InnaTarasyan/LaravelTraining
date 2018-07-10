<?php
namespace App\Helpers;

use App\Application;
use App\Helpers\Contracts\SaveStr;
use App\Http\Requests\ApplicationRequest;
use Request;
use Storage;


class SaveFile implements SaveStr {

    public static function save(ApplicationRequest $request, Application $application){

        // $obj = new self; // Now we can access methods of this class

         $str = $request['name'].' | '.$request['desc'];

         $result = Storage::prepend('str.txt', $str); // stores in storage/app/public/str.txt

        if($result){
            return ['status' => 'Приложение Добавлено!'];
        }

        return ['status' => 'error'];
        }

}