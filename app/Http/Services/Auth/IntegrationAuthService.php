<?php

namespace App\Http\Services\Auth;

use App\Http\Services\Interface\IntegrationAuthServiceInterface;
use App\Repositories\Interface\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class IntegrationAuthService implements IntegrationAuthServiceInterface
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function callback($provider)
    {
        $socialUser = Socialite::driver($provider)->user();

        $socialAccount = $this->userRepository->getUserInSocialTable($provider, $socialUser);

        if ($socialAccount) {
            Auth::login($socialAccount->user);
        } else {
            $user = $this->userRepository->getEntityByEmailWithSocial($socialUser);
            if (!$user) {
                // Присваиваем созданного пользователя переменной $user!
                $user = $this->userRepository->createEntity([
                    'login' => $socialUser->getNickname(),
                    'email' => $socialUser->getEmail(),
                    'password' => Str::random(8),
                ]);
            }

            $user->socialAccount()->create([
                'provider_name' => $provider,
                'provider_id' => $socialUser->getId(),
            ]);

            $this->manualLogin($user);
        }
        return redirect()->intended('/');
    }

    private function manualLogin($user)
    {
        session()->flush();
        session()->regenerate(true);

        session()->put([
            'auth' => [
                'user_id' => $user->id,
                'user_data' => [
                    'id' => $user->id,
                    'email' => $user->email,
                    'login' => $user->login
                ]
            ]
        ]);

        Auth::setUser($user);
        Auth::login($user);
        Auth::loginUsingId($user->id);

        session()->save();

        // 6. Отладочная информация
        logger('Manual login completed', [
            'user_id' => $user->id,
            'auth_check' => Auth::check(),
            'auth_user_id' => Auth::id(),
            'session_user_id' => session('auth.user_id')
        ]);
    }
}
