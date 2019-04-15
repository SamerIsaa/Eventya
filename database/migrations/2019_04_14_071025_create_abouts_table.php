<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');

//            For Location

            $table->float('latitude',10,4)->default(0);
            $table->float('langitude',10,4)->default(0);
            $table->string('address');

//            Contact Informatios and Social Media

            $table->string('email');
            $table->string('phone');
            $table->string('google_plus');
            $table->string('twitter');
            $table->string('facebook');


//            Our Message
            $table->longText('our_message_ar');
            $table->longText('our_message_en');


//            About Us
            $table->longText('about_us_ar');
            $table->longText('about_us_en');

            $table->longText('polices_ar');
            $table->longText('polices_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
