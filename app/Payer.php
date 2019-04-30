<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Payer extends Authenticatable
{
    protected  $path = '/images/';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','phone','password','longitude','latitude','address','birth_date','photo_path','payments','city_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
