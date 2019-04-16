<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert([
            'name_ar' => 'طلبات جديدة',
            'name_en' => 'New Orders',
        ]);
        DB::table('order_statuses')->insert([
            'name_ar' => 'طلبات قيد الحجز',
            'name_en' => 'Reservation Orders',
        ]);
        DB::table('order_statuses')->insert([
            'name_ar' => 'طلبات منتهية',
            'name_en' => 'Ended Orders',
        ]);
    }
}
