<?php

namespace Database\Seeders;

use App\Models\CategoryParameter;
use App\Models\CategoryParameterValue;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CategoryParameter::factory(2)->create();
        CategoryParameterValue::factory(2)->create();
        Product::factory(2)->create();
        ProductCategory::factory(2)->create();
        User::factory(2)->create();
    }
}
