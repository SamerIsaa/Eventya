<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name_ar' , 'name_en'];

    public static function cities()
    {
        return City::select('name_ar' , 'name_en')->get();
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }
}
