<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'url',
        'description',
        'image',
        'original_price',
        'offer_price',
        'quantity',
        'priority'
    ];
}
