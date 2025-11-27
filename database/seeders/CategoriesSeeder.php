<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        Categories::factory()->count(5)->create();
    }
}
