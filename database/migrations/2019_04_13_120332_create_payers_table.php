<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();;
            $table->decimal('longitude')->default(0);
            $table->decimal('latitude')->default(0);
            $table->string('address')->nullable();
            $table->date('birthDate')->nullable();
            $table->string('photo_path')->nullable();
            $table->float('payments' , 10 , 2)->default(0);
            $table->string('password');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->rememberToken();
            $table->timestamps();


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
        Schema::dropIfExists('payers');
    }
}
