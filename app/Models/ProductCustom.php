<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCustom extends Model
{
    use HasFactory;
    protected $table = 'product_customs';
    protected $fillable = ['product_id', 'custom_id'];
}
