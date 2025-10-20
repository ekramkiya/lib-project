<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TestOrder extends Model
{
    protected $fillable = [
        'patient_id',
        'user_id',
        'status',
    
    ];

    /**
     * The patient who owns the order.
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    /**
     * User (staff) who created or is assigned to the order.
     * Assumes you use the default User model.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * Items (tests) inside this order.
     */
    public function items(): HasMany
    {
        return $this->hasMany(TestOrderItem::class);
    }

    /**
     * Invoice for the order (optional).
     */
    public function invoice(): HasOne
    {
        return $this->hasOne(Invoice::class);
    }
}
