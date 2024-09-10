<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'products';
    protected $fillable = ['title', 'image_cover', 'description', 'price', 'status'];

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'product_materials');
    }

    public function customs()
    {
        return $this->belongsToMany(Custom::class, 'product_customs');
    }

    public function functions()
    {
        return $this->belongsToMany(Functions::class, 'product_functions');
    }
}
