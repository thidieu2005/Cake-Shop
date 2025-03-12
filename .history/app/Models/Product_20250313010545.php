<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    public function productType(): BelongsTo
    {
        return $this->belongsTo(ProductType::class, 'id_type', 'id');
    }

    public function billDetails(): HasMany
    {
        return $this->hasMany(BillDetail::class, 'id_product', 'id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'id_product', 'id');
    }
}
