<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'unit',
        'category_id',
        'subcategory_id',
        'created_at',
        'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    function image_features()
    {
        return $this->hasMany(image_features::class, 'product_id');
    }
}
