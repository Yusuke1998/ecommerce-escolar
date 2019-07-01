<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('type',['administrador','vendedor','comprador'])->default('comprador');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('person_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            // Pertenece a
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
