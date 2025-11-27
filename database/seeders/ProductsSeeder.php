<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;
use App\Models\Categories;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        if (Categories::count() === 0) {
            $this->call(CategoriesSeeder::class);
        }

        Products::factory()->count(20)->create();
    }
}
