<?php
namespace App\Repositories;
use Config;

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
            return  $builder->paginate(Config::get('settings.paginate'));
        }

        return $builder->get();

    }
}