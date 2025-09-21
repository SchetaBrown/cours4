<?php

namespace App\Http\Controllers\Auth;

class RegisterController extends BaseAuthController
{
    public function index()
    {
        return inertia('Auth/Register');
    }

    public function store() {}
}
