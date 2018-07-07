<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'name',
        'desc',
        'img',
        'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
