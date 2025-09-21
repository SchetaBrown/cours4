<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use Closure;

class CheckDocumentsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user && $user->hasVerifiedDocuments()) {
            return $next($request);
        } else {
            return redirect()->route('profile.index')->with('checkIsNotValidate', 'Для бронирования автомобиля следует ввести паспортные данные и водительское удостоверение');
        }
    }
}
