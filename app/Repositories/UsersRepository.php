<?php

namespace App\Repositories;

use App\User;
use Gate;

class UsersRepository extends Repository
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function addUser($request){

        $data = $request->except('_token');
        if(empty($data)){
            return array(['error' => 'Нет данных!']);
        }

        $data['password'] = bcrypt($data['password']);

        $user = $this->model->create($data);
        if($user){
            $user->roles()->attach($data['role_id']);
        }

        return ['status' => 'Пользователь Доваблен!'];

    }

    public function updateUser($request, $user){

        $data = $request->except('_token');
        if(empty($data)){
            return array(['error' => 'Нет данных!']);
        }

        $data['password'] = bcrypt($data['password']);
        $user->fill($data)->update();
        $user->roles()->sync([$data['role_id']]);

        return ['status' => 'Пользователь обновлен!'];

    }

    public function deleteUser(User $user)
    {
        $user->roles()->detach();

        if($user->delete()){
            return ['status' => 'Пользователь Удален!'];
        }
    }
}