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
        'address',
        'photo_path',
        'info',
        'receivable',
        'rate',
        'is_approved',
        'password'
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
}
