<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CategoryParameterValue extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryParameterValueFactory> */
    use HasFactory;

    public function parameter(): BelongsTo
    {
        return $this->belongsTo(CategoryParameter::class, 'category_parameter_id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
