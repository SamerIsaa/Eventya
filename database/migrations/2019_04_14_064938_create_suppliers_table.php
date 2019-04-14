<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->unique();
            $table->string('photo_path');
            $table->float('receivable' , 10 , 2)->default(0);
            $table->boolean('is_aproved');
            $table->string('location');
            $table->float('latitude', 10,5);
            $table->float('longitude', 10,5);
            $table->unsignedBigInteger('city_id');
            $table->rememberToken();
            $table->timestamps();


            //Forgin key for Cities Table ...


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
