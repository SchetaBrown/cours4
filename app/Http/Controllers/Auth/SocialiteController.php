<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Services\Interface\IntegrationAuthServiceInterface;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function index($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function store($provider, IntegrationAuthServiceInterface $integrationAuthService)
    {
        return $integrationAuthService->callback($provider);
    }
}
