<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'added_by',
        'title',
        'description',
        'image_path',
        'current_price',
        'selling_price',
        'group',
    ];
}
