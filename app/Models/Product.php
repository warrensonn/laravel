<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['description', 'price', 'image', 'quantity'];
    public $timestamps = false;
}
