<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $fillable = [
        'name',
        'name_en',
        'photo_path'
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
