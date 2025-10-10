<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Repositories\CarRepository;
use App\Http\Services\Interface\AuthServiceInterface;

class IndexController extends Controller
{
    public function index(AuthServiceInterface $authService, CarRepository $carRepository)
    {
        $isAuth = $authService->checkAuthUser();
        $carCategories = $carRepository->getAllCategories();
        $cars = $carRepository->getAllCars();

        return Inertia::render('Index', [
            'isAuth' => $isAuth,
            'carCategories' => $carCategories,
            'cars' => $cars,
        ]);
    }
}
