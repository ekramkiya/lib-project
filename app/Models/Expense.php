<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Model
{
    use HasFactory;

    // Mass assignable fields
    protected $fillable = [
        'title',
        'amount',
        'category',
        'date',
        'description',
    ];

    // Cast date and amount properly
    protected $casts = [
        'date' => 'date',
        'amount' => 'decimal:2',
    ];
}
