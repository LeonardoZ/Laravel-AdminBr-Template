<?php

namespace App\Repositories;

abstract class BaseRepository
{
    protected $modelClass;

    public function getAll()
    {
        return $this->doQuery(null, $take, $paginate);
    }

    public function findById($id, $fail = true)
    {
        if ($fail) {
            return $this->newQuery()->findOrFail($id);
        }
        return $this->modelClass::where('id', $id)->get()->first();
    }

    public function all()
    {
        return $this->modelClass::get();
    }

    public function findBy($column, $value)
    {
        return $this->modelClass::where($column, $value)->get();
    }

    public function create(array $data)
    {
        return $this->modelClass::create($data);
    }

    public function updateBy($model, array $data)
    {
        return $model->update($data);
    }

    public function deleteBy($model)
    {
        return $this->modelClass::where('id', $model['id'])->delete();
    }

}