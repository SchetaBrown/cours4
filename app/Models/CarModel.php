<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = [
        'id',
        'title',
        'engine_fuel_type',
        'transmission',
        'car_brand_id',
        'car_category_id',
    ];

    public function carCategory()
    {
        return $this->belongsTo(CarCategory::class);
    }

    public function carBrand()
    {
        return $this->belongsTo(CarBrand::class);
    }
}
