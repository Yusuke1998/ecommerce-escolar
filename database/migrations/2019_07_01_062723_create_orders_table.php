<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('postal_code');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('status')->default('nueva');
            $table->string('guide_number')->nullable();
            $table->integer('total');
            $table->integer('user_id')->unsigned();
            $table->integer('shopping_cart_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('shopping_cart_id')->references('id')->on('shopping_carts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
