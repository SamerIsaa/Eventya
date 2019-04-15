<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'catagory_id',
        'supplier_id',
        'name',
        'price_per_hours',
        'offer_price_per_hours',
        'is_offer',
        'currency',
        'tax',
        'condition',
        'color',
        'rate'
    ];
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function catagory()
    {
        return $this->belongsTo(Catagory::class);
    }
    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
