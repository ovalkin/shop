<?php

namespace Database\Factories;

use App\Models\CategoryParameter;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CategoryParameter>
 */
class CategoryParameterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['string', 'int', 'float', 'bool'];
        return [
            'category_id' => ProductCategory::factory(),
            'name' => fake()->word(),
            'type' => $types[array_rand($types)],
        ];
    }
}
