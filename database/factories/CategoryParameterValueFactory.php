<?php

namespace Database\Factories;

use App\Models\CategoryParameter;
use App\Models\CategoryParameterValue;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryParameterValue>
 */
class CategoryParameterValueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_parameter_id' => CategoryParameter::factory(),
            'product_id' => Product::factory(),
            'value' => function (array $attributes) {
                $categoryParameter = CategoryParameter::find($attributes['category_parameter_id']);
                return $this->generateValueByType($categoryParameter->type);
            }
        ];
    }

    public function generateValueByType(string $type): string
    {
        return match ($type) {
            'bool' => fake()->boolean() ? 'true' : 'false',
            'int' => fake()->numberBetween(),
            'float' => fake()->randomFloat(),
            'string' => fake()->word(),
            default => fake()->word()
        };
    }
}
