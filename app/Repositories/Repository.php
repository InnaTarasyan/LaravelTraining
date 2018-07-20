<?php
namespace App\Repositories;
use Config;
use Request;

abstract class Repository
{
    protected $model = FALSE;

    public function get($select = '*', $take = FALSE, $pagination = FALSE, $where = FALSE){
        $builder = $this->model->select($select);

        if($take){
            $builder->take($take);
        }

        if($where){
            $builder->where($where[0], $where[1]);
        }

        if($pagination){
            if (Request::is('admin/*'))
            {
                return  $builder->paginate(4);
            }
            return  $builder->paginate(Config::get('settings.paginate'));
        }

        return $builder->get();

    }

    public function one($id, $attr = array()){
        $data = $this->model->where('id', $id)->get();
        if(count($data) > 0){
            $result = $data->first();
            return $result;
        }
        return [];
    }

}