<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['name', 'age', 'gender', 'contact', 'address'];

    public function orders()
    {
        return $this->hasMany(TestOrder::class);
    }
}
