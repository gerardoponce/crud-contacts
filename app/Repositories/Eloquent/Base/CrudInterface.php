<?php


namespace App\Repositories\Eloquent\Base;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface CrudInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;

    /**
     * @param Model $model
     * @return Model
     */
    public function find(Model $model): Model;

    /**
     * @param array $data
     * @return Model
     */
    public function create(array  $data): Model;

    /**
     * @param array $data
     * @param Model $model
     * @return mixed
     */
    public function update(array $data, Model $model);

    /**
     * @param Model $model
     * @return mixed
     */
    public function delete(Model $model);
}
