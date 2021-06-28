<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('description');
            $table->timestamps();
        });
        Schema::create('product_supplie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supplie_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('supplie_id')->references('id')->on('supplies');
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('amount');
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
        Schema::dropIfExists('products');
    }
}
