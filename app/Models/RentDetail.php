<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentDetail extends Model
{
    protected $fillable = [
        'tenant_name',
        'address',
        'no_hp',
        'car_id'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
