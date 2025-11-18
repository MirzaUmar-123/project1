<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
    'user_id',
    'product_id',
];
}
