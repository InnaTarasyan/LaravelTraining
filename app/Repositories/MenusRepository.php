<?php

namespace App\Repositories;

use App\Menu;

class MenusRepository extends Repository{
    public function __construct(Menu $menu) {
        $this->model = $menu;
    }

    public function getComments(){

    }


    public function addMenu($request){

        $data = $request->only('type', 'title', 'parent', 'path');

        if(empty($data)){
            return array(['error' => 'Нет данных!']);
        }

        if($this->model->fill($data)->save()){
            return array(['status' => 'Ссылка добавлена!!']);
        }

    }


    public function updateMenu($request, $menu){

        $data = $request->only('type', 'title', 'parent', 'path');

        if(empty($data)){
            return array(['error' => 'Нет данных!']);
        }

        if($menu->fill($data)->update()){
            return array(['status' => 'Ссылка обновлена!!']);
        }

    }

    public function deleteMenu($menu){

        if($menu->delete()){
            return array(['status' => 'Ссылка удалена!!']);
        }
    }
}