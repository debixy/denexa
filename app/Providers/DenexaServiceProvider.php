<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\AuthService;
use App\Services\RoleService;
use App\Services\PermissionService;
use App\Services\CountryService;
use App\Services\ProjectService;
use App\Services\ServiceService;
use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use App\Repositories\PermissionRepository;
use App\Repositories\CountryRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\ServiceRepository;

class DenexaServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Bind services
        $this->app->singleton(AuthService::class, function ($app) {
            $userRepository = $app->make(UserRepository::class);
            return new AuthService($userRepository);
        });

        $this->app->singleton(RoleService::class, function ($app) {
            $roleRepo = $app->make(RoleRepository::class);
            return new RoleService($roleRepo);
        });

        $this->app->singleton(PermissionService::class, function ($app) {
            $permissionRepo = $app->make(PermissionRepository::class);
            return new PermissionService($permissionRepo);
        });

        $this->app->singleton(CountryService::class, function ($app) {
            $countryRepo = $app->make(CountryRepository::class);
            return new CountryService($countryRepo);
        });

        $this->app->singleton(ProjectService::class, function ($app) {
            $projectRepo = $app->make(ProjectRepository::class);
            return new ProjectService($projectRepo);
        });

        $this->app->singleton(ServiceService::class, function ($app) {
            $serviceRepo = $app->make(ServiceRepository::class);
            return new ServiceService($serviceRepo);
        });

        // Bind repositories
        $this->app->singleton(UserRepository::class, function ($app) {
            return new UserRepository();
        });

        $this->app->singleton(RoleRepository::class, function ($app) {
            return new RoleRepository();
        });

        $this->app->singleton(PermissionRepository::class, function ($app) {
            return new PermissionRepository();
        });

        $this->app->singleton(CountryRepository::class, function ($app) {
            return new CountryRepository();
        });

        $this->app->singleton(ProjectRepository::class, function ($app) {
            return new ProjectRepository();
        });

        $this->app->singleton(ServiceRepository::class, function ($app) {
            return new ServiceRepository();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // You can add any bootstrapping code here if needed
    }
}
