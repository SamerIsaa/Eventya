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
            $table->string('phone')->unique()->nullable();
            $table->string('photo_path')->nullable();
            $table->string('address')->nullable();
            $table->float('receivable' , 10 , 2)->default(0);
            $table->boolean('is_aproved')->default(0);
            $table->string('location')->nullable();
            $table->float('latitude', 10,5)->nullable();
            $table->float('longitude', 10,5)->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->rememberToken();
            $table->timestamps();


            //Forgin key for Cities Table ...
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');


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
