<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTitle extends Model
{
    use HasFactory;
    protected $table = 'product_titles';
    protected $fillable = ['product_id', 'title'];
}
