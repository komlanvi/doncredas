<?php
/**
 * Created by PhpStorm.
 * User: doncredas
 * Date: 02/01/16
 * Time: 22.45
 */

namespace App\Repositories;


use App\User;

class UserRepository extends BaseRepository
{

    public function __construct(User $user)
    {
        $this->model = $user;
    }

}