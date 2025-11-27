<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoriesFactory extends Factory
{
    protected $model = Categories::class;

    public function definition(): array
    {
        $name = fake()->unique()->words(2, true);

        return [
            'name'        => $name,
            'slug'        => Str::slug($name),
            'description' => fake()->sentence(),
            'image'       => fake()->imageUrl(600, 400, 'category', true),
            'is_active'   => true,
        ];
    }
}
