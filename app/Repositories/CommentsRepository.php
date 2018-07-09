<?php

namespace App\Repositories;

use App\Comment;

class CommentsRepository extends Repository{
    public function __construct(Comment $comment) {
        $this->model = $comment;
    }

    public function getComments(){

    }
}