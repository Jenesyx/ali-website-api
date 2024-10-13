<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTerial extends Model
{
    use HasFactory;
    protected $table = 'terials';
    protected $fillable = ['product_id', 'name', 'subprice'];
}
