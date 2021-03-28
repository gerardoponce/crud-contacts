<?php


namespace App\Repositories\Eloquent\Base;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CrudInterfaceImpl implements CrudInterface
{
    /**
     * @var
     */
    protected $model;

    /**
     * CrudInterfaceImpl constructor.
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @inheritDoc
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * @inheritDoc
     */
    public function find(Model $model): Model
    {
        return $model;
    }

    /**
     * @inheritDoc
     */
    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    /**
     * @inheritDoc
     */
    public function update(array $data, Model $model)
    {
        return $model->update($data);
    }

    /**
     * @inheritDoc
     */
    public function delete(Model $model)
    {
        return $model->delete($model);
    }
}
