<?php

namespace Database\Seeders;

use App\Models\CategoryParameter;
use App\Models\ProductParameterValue;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ProductParameterValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productCategories = ProductCategory::factory(1)
            ->create()
            ->first();
        $categoryParameter = CategoryParameter::factory(5)
            ->state(['category_id' => $productCategories['id']])
            ->create();
        $product = Product::factory(1)
            ->state(['category_id' => $productCategories['id']])
            ->create()
            ->first();
        ProductParameterValue::factory(5)
            ->state(['product_id' => $product['id']])
            ->sequence(
                fn (Sequence $sequence)
                => ['category_parameter_id' => $categoryParameter[$sequence->index]->id]
            )
            ->create();
    }
}
