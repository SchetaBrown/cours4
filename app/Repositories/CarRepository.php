<?php

namespace App\Repositories;

use App\Models\CarCategory;
use App\Models\CarModel;
use App\Repositories\Interface\CarRepositoryInterface;

class CarRepository implements CarRepositoryInterface
{
    public function getAllCars()
    {
        return CarModel::with(['carCategory', 'carBrand'])->paginate(6);
    }

    public function getAllCategories()
    {
        return CarCategory::get();
    }

    public function getEntityById($id)
    {
        return CarModel::findOrFail($id);
    }
}
