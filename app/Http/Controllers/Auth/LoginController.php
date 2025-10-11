<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LoginRequest;
use GuzzleHttp\Psr7\Request;
use Inertia\Inertia;

class LoginController extends BaseAuthController
{
    public function index()
    {
        return inertia('Auth/Login');
    }

    public function store(LoginRequest $request)
    {
        $isStore = $this->authService->login($request);

        if ($isStore) {
            return redirect()->intended(route('profile.index'));
        }

        return redirect()->back()->withErrors(['email' => 'Неверные учетные данные']);
    }

    public function destroy()
    {
        return $this->authService->logout();
    }
}
