<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
'user_id',
'product_id',
'rating', // integer
'title',
'body',
'status', // approved/pending/spam
'helpful_count',
];
    protected function casts(): array
    {
        return [
            'rating' => 'integer',
            'helpful_count' => 'integer',
        ];
    }
}
