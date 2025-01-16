<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductUsage extends Model
{
    protected $fillable = ['product_id', 'usage_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function usage()
    {
        return $this->belongsTo(Usage::class);
    }
}
