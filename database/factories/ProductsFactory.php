<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'catagory_id'   => rand(1,3),
        'supplier_id'   =>  function () {
                                return factory(App\User::class)->create()->id;
                            },
        'name' => $faker->name,
        'price_per_hour'=> $faker->randomFloat(3 , 0 , 1000),
        'offer_price_per_hour'=> $faker->randomFloat(3 , 0 , 1000),
        'is_offer'=> $faker->boolean,
        'currency'=> 'USD',
        'tax'=> $faker->randomFloat(2, 0 , 20),
        'color'=> $faker->colorName,
        'rate'=> $faker->randomFloat(2,0,5)
    ];
});
