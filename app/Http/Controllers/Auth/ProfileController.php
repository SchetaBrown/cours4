<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class ProfileController extends Controller
{
    public function index()
    {
        return inertia('Pages/Profile/Profile');
    }

    public function store() {}
}
