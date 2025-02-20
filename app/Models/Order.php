<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'name',
        'address',
        'phone',
        'products',
        'payment_type',
        'total_bill',
        'payment_status',
    ];
}
