<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'currency_id',
        'name',
        'price',
        'expired_at'
    ];

    protected $casts = [
        'expired_at' => 'date'
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
