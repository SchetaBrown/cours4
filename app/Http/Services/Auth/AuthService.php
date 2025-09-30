<?php

namespace App\Http\Services\Auth;

use App\Http\Services\Interface\AuthServiceInterface;
use App\Repositories\Interface\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class AuthService implements AuthServiceInterface
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository
    ) {}

    public function login($data)
    {
        return Auth::attempt($data);
    }

    public function logout()
    {
        session()->forget('auth');
        session()->flush();
        session()->regenerate(true);

        return redirect()->route('index');
    }

    public function register($data)
    {
        $this->userRepository->createEntity($data);
    }
}
