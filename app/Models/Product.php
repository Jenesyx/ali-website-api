<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'products';
    protected $fillable = ['title', 'image_cover', 'description', 'price', 'info','type','status'];

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

    public function sizes()
    {
        return $this->hasMany(ProductSize::class, 'product_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function colors()
    {
        return $this->hasMany(ProductColor::class, 'product_id', 'id');
    }

    public function terials()
    {
        return $this->hasMany(ProductTerial::class, 'product_id', 'id');
    }
}
