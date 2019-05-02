<?php

use Illuminate\Database\Seeder;

class Cities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cities')->insert([
            'name_ar' => 'غزة',
            'name_en' => 'Gaza',
        ]);
    }
}
