<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'langitude',
        'latitude',
        'address',
        'email',
        'phone',
        'google_plus',
        'twitter',
        'facebook',
        'about_us_ar',
        'about_us_en',
        'our_message_ar',
        'our_message_en',
        'polices_ar',
        'polices_en',
    ];

    public static function lngLat(){
        return About::select('latitude','langitude')->first();

    }
}
