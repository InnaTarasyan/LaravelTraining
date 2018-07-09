<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['text','user_id','application_id','parent_id'];

    public function application(){
        return $this->belongsTo('App\Application');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}
