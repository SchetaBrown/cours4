<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = [
        'title'
    ];

    public function carCategory()
    {
        return $this->belongsTo(CarModel::class);
    }

    public function carBrand()
    {
        return $this->belongsTo(CarBrand::class);
    }
}
