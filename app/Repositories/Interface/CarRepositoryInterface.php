<?php

namespace App\Repositories\Interface;

interface CarRepositoryInterface {
    public function getAllCars();
    public function getEntityById($id);
}
