<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'customer_name',
        'email',
        'phone',
        'company',
        'product_id',
        'message',
        'status',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
