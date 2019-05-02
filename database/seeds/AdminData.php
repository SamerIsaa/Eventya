<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminData extends Seeder
{
    public function run()
    {
        \DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            ]);
    }
}