<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Repositories\Interface\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(UserRepositoryInterface $userService)
    {
        $userInfo = $userService->getEntityById(Auth::id());
        return inertia('Profile', [
            'userInfo' => $userInfo,
        ]);
    }

    public function store() {}
}
