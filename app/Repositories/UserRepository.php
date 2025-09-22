<?php

namespace App\Repositories;

use App\Models\SocialAccount;
use App\Models\User;
use App\Repositories\Interface\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserRepository implements UserRepositoryInterface
{
    public function getEntityById($id): ?User
    {
        return User::with(['achievements'])->where('id', $id)->first();
    }

    public function createEntity($data)
    {
        return User::create($data);
    }

    public function getUserInSocialTable($provider, $socialAccount): ?SocialAccount
    {
        return SocialAccount::where('provider_name', $provider)
            ->where('provider_id', $socialAccount->getId())
            ->first();
    }

    public function getEntityByEmailWithSocial($socialAccount): ?User
    {
        return User::with(['socialAccount'])
            ->where('email', $socialAccount->getEmail())
            ->first();
    }
}
