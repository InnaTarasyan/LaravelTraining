<?php

namespace App\Repositories;

use App\Permission;

class PermissionsRepository extends Repository{

    protected  $rol_rep;
    public function __construct(Permission $permission, RolesRepository $rol_rep) {
        $this->model = $permission;
        $this->rol_rep = $rol_rep;
    }


    public function changePermissions($request){


        $data = $request->except('_token');
        $roles = $this->rol_rep->get('*');

        foreach ($roles as $role){
            if(isset($data[$role->id])){
                $role->savePermission($data[$role->id]);
            } else {
                $role->savePermission([]);
            }
        }

        return ['status' => 'Привилегии обновлены!'];
    }

}