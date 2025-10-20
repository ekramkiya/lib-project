<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TestOrderItem extends Model
{
    protected $fillable = [
        'test_order_id',
        'test_definition_id',
        'price',
        'notes',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    /**
     * The order this item belongs to.
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(TestOrder::class, 'test_order_id');
    }

    /**
     * The test definition this item refers to.
     */
    public function testDefinition(): BelongsTo
    {
        return $this->belongsTo(TestDefinition::class, 'test_definition_id');
    }

    /**
     * Result for this specific item (one-to-one).
     */
    public function result(): HasOne
    {
        return $this->hasOne(Result::class);
    }
}
