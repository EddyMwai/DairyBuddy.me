<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class extension_services extends Model
{
    use HasFactory;

       protected $fillable = [
        'type',
        'quantity',
        'date',
        'product_or_service',
    ];
}
