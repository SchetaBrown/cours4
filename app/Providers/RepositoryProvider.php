<?php

namespace App\Providers;

use App\Repositories\Interface\CarRepositoryInterface;
use App\Repositories\Interface\UserRepositoryInterface;
use App\Repositories\CarRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    protected const BINDING = [
        UserRepositoryInterface::class => UserRepository::class,
        CarRepositoryInterface::class => CarRepository::class,
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        foreach (self::BINDING as $abstract => $concrete) {
            $this->app->bind($abstract, $concrete);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
