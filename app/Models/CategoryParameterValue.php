<?php

namespace App\Models;

use Database\Factories\CategoryParameterValueFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryParameterValue extends Model
{
    /** @use HasFactory<CategoryParameterValueFactory> */
    use HasFactory;
    use SoftDeletes;

    public function parameter(): BelongsTo
    {
        return $this->belongsTo(CategoryParameter::class, 'category_parameter_id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
