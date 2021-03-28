<?php


namespace App\Repositories\Eloquent;


use App\Models\User;
use App\Repositories\Eloquent\Base\CrudInterfaceImpl;
use App\Repositories\Interfaces\UserRepository;

class UserRepositoryImpl extends CrudInterfaceImpl implements UserRepository
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
