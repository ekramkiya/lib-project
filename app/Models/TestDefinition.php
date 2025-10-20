<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TestDefinition extends Model
{
    protected $fillable = [
        'name',
        'category',
        'unit',
        'reference_range',
        'price',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    /**
     * A test definition may appear on many order items.
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(TestOrderItem::class);
    }
}
