<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarCategory extends Model
{
    protected $fillable = [
        'title',
        'image'
    ];

    public function carModel()
    {
        return $this->hasMany(CarModel::class, 'car_category_id');
    }
}
