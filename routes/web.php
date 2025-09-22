<?php

use App\Http\Controllers\Auth\{LoginController, ProfileController, RegisterController, SocialiteController};
use App\Models\{CarCategory, CarModel};
use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', function () {
    $isAuth = Auth::check();
    $carCatetories = CarCategory::get();
    $cars = CarModel::get();
    return inertia('Index', [
        'isAuth' => $isAuth,
        'carCatetories' => $carCatetories,
        'cars' => $cars
    ]);
})->name('index');

// Авторизация
Route::controller(LoginController::class)->name('login.')->group(function () {
    Route::prefix('login')->group(function () {
        Route::get('/', 'index')->name('index');  // Страница авторизации
        Route::post('/', 'store')->name('store');  // Маршрут для входа в систему
    });
    Route::post('/logout', 'destroy')->middleware('isAuth')->name('destroy');  // Маршрут для выхода из системы
});

// Авторизация через внешние сервисы
Route::controller(SocialiteController::class)->name('socialite.')->group(function () {
    Route::get('/auth/{provider}', 'index')->name('redirect');
    Route::get('/auth/{provider}/callback', 'store')->name('callback');
});

// Регистрация
Route::controller(RegisterController::class)->name('register.')->prefix('register')->group(function () {
    Route::get('/', 'index')->name('index');  // Страница регистрации
    Route::post('/', 'store')->name('store');  // Маршрут для создания пользователя
});

// Защищенные маршруты
Route::middleware(['isAuth'])->group(function () {
    Route::controller(ProfileController::class)->name('profile.')->prefix('profile')->group(function () {
        Route::get('/', 'index')->name('index');  // Страница профиля пользователя
        Route::post('/update', 'update')->name('update');  // Обновление пароля
    });
});
