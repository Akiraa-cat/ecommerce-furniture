<?php

namespace Database\Factories;

use App\Models\Products;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductsFactory extends Factory
{
    protected $model = Products::class;

    public function definition(): array
    {
        $name = fake()->unique()->words(3, true);

        return [
            'category_id' => Categories::inRandomOrder()->value('id') ?? null,

            'name'        => $name,
            'slug'        => Str::slug($name) . '-' . uniqid(),

            'description' => fake()->paragraph(),

            'weight'      => fake()->randomFloat(2, 0.1, 5.0), // kg
            'price'       => fake()->numberBetween(10000, 250000),

            'stock'       => fake()->numberBetween(0, 100),

            'images'      => [
                fake()->imageUrl(640, 640, 'product', true),
                fake()->imageUrl(640, 640, 'furniture', true),
                fake()->imageUrl(640, 640, 'interior', true),
            ],

            'sku'         => strtoupper(Str::random(8)),
            'is_featured' => fake()->boolean(20),
            'is_active'   => fake()->boolean(90),
        ];
    }
}
