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
        return $this->hasMany(ProductMaterial::class, 'id', 'product_id');
    }

    public function customs()
    {
        return $this->hasMany(ProductCustom::class);
    }

    public function functions()
    {
        return $this->hasMany(ProductCustom::class);
    }
}
