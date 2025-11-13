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
}
