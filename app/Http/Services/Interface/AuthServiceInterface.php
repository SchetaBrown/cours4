<?php

namespace App\Http\Services\Interface;

interface AuthServiceInterface
{
    public function login($request);
    public function logout();
    public function register($data);
}
