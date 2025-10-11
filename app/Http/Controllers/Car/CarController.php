<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Repositories\Interface\CarRepositoryInterface;
use Illuminate\Http\Request;

class CarController extends Controller
{

    private CarRepositoryInterface $carRepository;

    public function __construct(CarRepositoryInterface $carRepository)
    {
        $this->carRepository = $carRepository;
    }
    public function index()
    {
        $carInfo = $this->carRepository->getEntityById(1);
        return inertia('Car/Car', ['carInfo' => $carInfo]);
    }
}
