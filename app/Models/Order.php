<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
    'order_number',
    'status', // pending, paid, shipped, delivered, cancelled
    'total_amount',
    'payment_method',
    'shipping_address',
    'billing_address'
    ];
}
