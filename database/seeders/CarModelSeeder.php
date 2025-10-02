<?php

namespace Database\Seeders;

use App\Models\CarModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = config('constants.models');

        foreach ($models as $model) {
            CarModel::create($model);
        }
    }
}
