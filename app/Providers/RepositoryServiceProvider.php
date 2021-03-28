<?php

namespace App\Providers;

use App\Repositories\Eloquent\Base\CrudInterface;
use App\Repositories\Eloquent\Base\CrudInterfaceImpl;
use App\Repositories\Eloquent\UserRepositoryImpl;
use App\Repositories\Interfaces\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CrudInterface::class, CrudInterfaceImpl::class);
        $this->app->bind(UserRepository::class, UserRepositoryImpl::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
