<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category_parameter_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_parameter_id')->constrained('category_parameters', 'id');
            $table->foreignId('product_id')->constrained('products', 'id');
            $table->string('value');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['category_parameter_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_parameter_values');
    }
};
