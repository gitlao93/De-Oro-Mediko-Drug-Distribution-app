<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_table extends Model
{
    use HasFactory;
    protected $fillable = [
        'generic_name', 'brand_name', 'price'
    ];
}
