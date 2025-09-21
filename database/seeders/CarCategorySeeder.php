<?php

namespace Database\Seeders;

use App\Models\CarCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = config('constants.categories');

        foreach ($categories as $category) {
            CarCategory::create($category);
        }
    }
}
