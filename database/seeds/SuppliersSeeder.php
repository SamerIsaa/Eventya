<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\Supplier::class , 50 )->create();
        factory(App\Supplier::class, 50)->create()->each(function ($supplier) {
            $supplier->products()->save(factory(App\Product::class)->make());
        });
    }
}
