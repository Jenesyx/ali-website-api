<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFunction extends Model
{
    use HasFactory;
    protected $table = 'product_functions';
        protected $fillable = ['product_id', 'functions_id'];
}
