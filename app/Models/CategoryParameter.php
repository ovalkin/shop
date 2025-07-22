<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CategoryParameter extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryParameterFactory> */
    use HasFactory;

    public function values(): HasMany
    {
        return $this->hasMany(CategoryParameterValue::class, 'category_parameter_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
