<?php

namespace App\Repositories;

use App\Application;
use Image;
use Config;
use Redirect;

use App;

 //use App\Helpers\Contracts\SaveStr;

use SaveStr;

class ApplicationsRepository extends Repository{
    public function __construct(Application $application) {
        $this->model = $application;
    }


    public function addApplication($request /* ,$savestr */ )
    {
        $data = $request->except('_token');

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            if ($image->isValid()) {
                $img = Image::make($image);
                $data['img'] = str_random(8).'.jpg';
                $img->save(public_path().'/'.'/images/apps/'.$data['img']);

                // we can move image without Image library

            }
        }

        $this->model->fill($data);

        return SaveStr::save($request, $this->model);

      // $var = App::make('App\Helpers\Contracts\SaveStr');
      //  $var = App::make('SaveStr'); // using alias
      //  return $savestr->save($request, $this->model);
      //  if($request->user()->applications()->save($this->model)){
      //  return ['status' => 'Приложение Добавлено!'];
      //  }

    }


    public function updateApplication($request, $application){
        $data = $request->except('_token', 'img', 'old_image', '_method');
        if(empty($data)){
            return array(['error' => 'Нет Данных!']);
        }

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            if ($image->isValid()) {
                $img = Image::make($image);
                $data['img'] = str_random(8).'.jpg';
                $img->save(public_path().'/'.'/images/apps/'.$data['img']);

                // we can move image without Image library

            }
        }

        $application->fill($data);
        if($application->update()){
            return ['status' => 'Приложение обновлено!'];
        }


    }


    public function deleteApplication($application){
        $application->comments()->delete();
        if($application->delete()){
            return ['status' => 'Приложение удалено!'];
        }

    }

    public function one($id, $attr = array()){
        $application = parent::one($id, $attr);

        if($application && !empty($attr)){
            $application->load('comments');
            $application->comments->load('user');
        }

        return $application;
    }

}