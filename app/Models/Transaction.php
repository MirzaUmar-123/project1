<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
'user_id',
'order_id',
'amount',
'type', // charge, refund, payout
'gateway',
'reference', // gateway reference
'status',
];
}
