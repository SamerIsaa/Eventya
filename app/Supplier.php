<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Supplier extends Authenticatable
{
    protected  $path = '/images/';
    protected $fillable =  [
        'name',
        'email',
        'phone',
        'longitude',
        'latitude',
        'location',
        'photo_path',
        'info',
        'receivable',
        'rate',
        'is_aproved',
        'password',
        'rate'
    ];
    protected $hidden = [
        'password', 'remember_token'
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
