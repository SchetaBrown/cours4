<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    protected $fillable = [
        'title',
    ];

    public function carModel()
    {
        return $this->hasMany(CarModel::class, 'car_brand_id');
    }
}
