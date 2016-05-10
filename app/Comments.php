<?php

namespace App;

use Assely\Comment\Comment as CommentRepository;

class Comments extends CommentRepository
{
    /**
     * Specify columns of comments list.
     *
     * @return array
     */
    public function columns()
    {
        return [
            //
        ];
    }
}
