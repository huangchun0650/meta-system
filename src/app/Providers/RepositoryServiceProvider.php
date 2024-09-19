<?php

namespace HuangChun\MetaSystem\App\Providers;

use HuangChun\MetaSystem\App\Repositories\Admin\AdminRepository;
use HuangChun\MetaSystem\App\Repositories\Admin\AdminRepositoryInterface;
use HuangChun\MetaSystem\App\Repositories\Auth\AuthRepository;
use HuangChun\MetaSystem\App\Repositories\Auth\AuthRepositoryInterface;
use HuangChun\MetaSystem\App\Repositories\Menu\MenuRepository;
use HuangChun\MetaSystem\App\Repositories\Menu\MenuRepositoryInterface;
use HuangChun\MetaSystem\App\Repositories\Role\RoleRepository;
use HuangChun\MetaSystem\App\Repositories\Role\RoleRepositoryInterface;
use HuangChun\MetaSystem\App\Repositories\Setting\PermissionRepository;
use HuangChun\MetaSystem\App\Repositories\Setting\PermissionRepositoryInterface;
use HuangChun\MetaSystem\App\Repositories\Setting\RuleRepository;
use HuangChun\MetaSystem\App\Repositories\Setting\RuleRepositoryInterface;
use HuangChun\MetaSystem\App\Repositories\Setting\MethodRepository;
use HuangChun\MetaSystem\App\Repositories\Setting\MethodRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * 指定提供者載入是否延緩
     *
     * @var bool
     */
    protected $defer = TRUE;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            AdminRepositoryInterface::class,
            AdminRepository::class
        );

        $this->app->bind(
            AuthRepositoryInterface::class,
            AuthRepository::class
        );

        $this->app->bind(
            MenuRepositoryInterface::class,
            MenuRepository::class
        );

        $this->app->bind(
            PermissionRepositoryInterface::class,
            PermissionRepository::class
        );

        $this->app->bind(
            RuleRepositoryInterface::class,
            RuleRepository::class
        );

        $this->app->bind(
            MethodRepositoryInterface::class,
            MethodRepository::class
        );

        $this->app->bind(
            RoleRepositoryInterface::class,
            RoleRepository::class
        );
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
