<?php

namespace App\Http\Controllers\Auth;

use App\Http\Services\Interface\AuthServiceInterface;

class BaseAuthController
{
    public function __construct(
        protected AuthServiceInterface $authService
    ) {}
}
