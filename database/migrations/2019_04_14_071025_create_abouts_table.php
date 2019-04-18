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
            $table->string('address')->nullable();

//            Contact Informatios and Social Media

            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();


//            Our Message
            $table->longText('our_message_ar')->nullable();
            $table->longText('our_message_en')->nullable();


//            About Us
            $table->longText('about_us_ar')->nullable();
            $table->longText('about_us_en')->nullable();

            $table->longText('polices_ar')->nullable();
            $table->longText('polices_en')->nullable();
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
