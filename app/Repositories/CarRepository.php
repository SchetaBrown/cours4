<?php

namespace App\Repositories;

use App\Models\CarModel;

class CarRepository
{
    public function getAllEntity()
    {
        return CarModel::with(['carCategory', 'carBrand'])->paginate(12);
    }

    public function getEntityById($id) {}
}
