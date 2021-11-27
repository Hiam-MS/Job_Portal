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
            $table->string('Fname')->nullable();
            $table->string('Father_name')->nullable();
            $table->string('Lname')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('place_Of_b')->nullable();
            // $table->text('national_number')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('military_service')->nullable();
            $table->string('Current_address')->nullable();
            $table->string('fixed_phone')->nullable();
            $table->string('mobile_number')->nullable();
            // $table->string('img')->nullable();
            $table->json('lang')->nullable();
            $table->unsignedBigInteger('user_id')->unique()->nullable();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
                   
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
