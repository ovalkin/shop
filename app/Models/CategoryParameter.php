<?php

namespace App\Models;

use Database\Factories\CategoryParameterFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryParameter extends Model
{
    /** @use HasFactory<CategoryParameterFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $attributes = [
        'type' => 'string'
    ];
    protected $fillable = [
        'name',
        'type',
        'unit'
    ];
    protected $touches = [
        'category'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'category_parameter_values')
            ->withPivot('value');
    }
}
