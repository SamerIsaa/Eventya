<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Supplier::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->unique()->phoneNumber,
        'longitude' => $faker->longitude,
        'latitude'  => $faker->latitude,
        'location'   => $faker->address,
        'receivable'=> $faker->randomFloat(10 , 0 , 1000000 ),
        'rate'  => $faker->randomFloat(2 , 0 , 5),
        'is_aproved' => $faker->boolean,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => Str::random(10),
    ];
});
