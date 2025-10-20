<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Result extends Model
{
    protected $fillable = [
        'test_order_item_id',
        'result_value',
        'unit',
        'reference_range',
        'is_abnormal',
        'notes',
    ];

    protected $casts = [
        'is_abnormal' => 'boolean',
    ];

    /**
     * The order item this result belongs to.
     */
    public function orderItem(): BelongsTo
    {
        return $this->belongsTo(TestOrderItem::class, 'test_order_item_id');
    }
}
