<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('catagory_id');

            $table->string('name');
            $table->float('price_per_hour',6,2)->default(0);
            $table->float('offer_price_per_hour',6,2)->default(0);
            $table->string('currency')->nullable();
            $table->boolean('is_offer')->default(0);
            $table->float('tax',5,2)->default(0);
            $table->longText('condition')->nullable();
            $table->string('color');
            $table->float('rate',2,1)->default(0);
            $table->timestamps();


//      Forign Keys Config

            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
//            $table->foreign('catagory_id')->references('id')->on('catagories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
