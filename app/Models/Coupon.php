<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
'code',
'discount_amount',
'description',
'expiry_date',
'usage_limit',
'min_order_amount',
'is_active',
];
    protected function casts(): array
    {
        return [
            'discount_amount' => 'decimal:2',
            'expiry_date' => 'datetime',
            'usage_limit' => 'integer',
            'min_order_amount' => 'decimal:2',
            'is_active' => 'boolean',
        ];
    }
}
