<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $name = fake()->unique()->words(3, true);
        return [
            'category_id' => Category::inRandomOrder()->first()?->id ?? 1,
            'name' => ucwords($name),
            'slug' => Str::slug($name) . '-' . fake()->unique()->numberBetween(100, 999),
            'price' => fake()->numberBetween(25, 500) * 10000,
            'stock' => fake()->numberBetween(5, 100),
            'description' => fake()->paragraph(),
            'is_active' => true,
        ];
    }
}
