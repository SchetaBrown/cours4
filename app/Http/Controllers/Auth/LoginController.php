<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LoginRequest;
use Inertia\Inertia;

class LoginController extends BaseAuthController
{
    public function index()
    {
        return inertia('Auth/Login');
    }

    public function store(LoginRequest $request)
    {
        $data = $request->validated();
        $isStore = $this->authService->login($data);

        if ($isStore) {
            return redirect()->intended('/profile');
        }

        return redirect()->back()->withErrors(['email' => 'Неверные учетные данные']);;
    }

    public function destroy()
    {
        return $this->authService->logout();
    }
}
