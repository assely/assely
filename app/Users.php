<?php

namespace App;

use Assely\User\User as UserRepository;

class Users extends UserRepository
{
    /**
     * Specify columns of users list.
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
