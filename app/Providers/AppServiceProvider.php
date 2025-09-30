<?php

namespace App\Providers;

use App\Http\Services\Auth\{IntegrationAuthService, AuthService};
use App\Http\Services\Interface\{AuthServiceInterface, IntegrationAuthServiceInterface};
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected const SINGLON = [
        AuthServiceInterface::class => AuthService::class,
        IntegrationAuthServiceInterface::class => IntegrationAuthService::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach (self::SINGLON as $abstract => $concrete) {
            $this->app->singleton($abstract, $concrete);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(function (\SocialiteProviders\Manager\SocialiteWasCalled $event) {
            $event->extendSocialite('github', \SocialiteProviders\GitHub\Provider::class);
            $event->extendSocialite('google', \SocialiteProviders\Google\Provider::class);
            $event->extendSocialite('yandex', \SocialiteProviders\Yandex\Provider::class);
        });
    }
}
