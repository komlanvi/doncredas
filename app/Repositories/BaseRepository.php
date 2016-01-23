<?php
/**
 * Created by PhpStorm.
 * User: doncredas
 * Date: 07/01/16
 * Time: 22.09
 */

namespace App\Repositories;


class BaseRepository
{

    protected $model;

    public function getPaginate($nbrPerPage)
    {
        return $this->model->paginate($nbrPerPage);
    }

    public function store(array $inputs)
    {
        return $this->model->create($inputs);
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($id, $inputs)
    {
        $this->getById($id)->fill($inputs);
    }

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }


}