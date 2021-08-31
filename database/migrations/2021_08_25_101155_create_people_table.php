<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->char('gender');
            $table->date('dob');
            $table->string('place-Of-b');
            $table->integer('national_number');
            $table->string('marital-status');
            $table->string('military-service');
            $table->string('Current-address');
            $table->string('fixed-phone');
            $table->string('mobile-number');
            $table->string('img');
            $table->json('lang')->nullable();
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
        Schema::dropIfExists('people');
    }
}
