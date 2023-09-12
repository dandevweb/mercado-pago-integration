<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Relations\{BelongsTo, BelongsToMany};

class Sku extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function skus(): BelongsToMany
    {
        return $this->belongsToMany(Order::class)->using(OrderSku::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
