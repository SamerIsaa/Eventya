<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $fillable = [
        'name_ar',
        'name_en',
        'image_path'
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function catagories()
    {
        return Catagory::all();
    }
}
