<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'is_super_product',
        'category_id',
        'brand_id',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function usages()
    {
        return $this->belongsToMany(Usage::class, 'product_usages');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function productUsage()
    {
        return $this->hasMany(ProductUsage::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
