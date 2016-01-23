<?php
/**
 * Created by PhpStorm.
 * User: doncredas
 * Date: 02/01/16
 * Time: 0.14
 */

namespace App\Repositories;


interface EmailRepositoryInterface
{
    public function save($email);
}