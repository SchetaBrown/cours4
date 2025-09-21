<?php

namespace App\Repositories\Interface;

interface CarRepositoryInterface {
    public function getAllEntity();
    public function getEntityById($id);
}
