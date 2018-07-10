<?php
namespace App\Helpers\Contracts;

use App\Application;
use App\Http\Requests\ApplicationRequest;
use Request;

Interface SaveStr{

   public static function save(ApplicationRequest $request, Application $application);

}