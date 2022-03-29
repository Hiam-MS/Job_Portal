<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_name')->nullable();
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
<<<<<<< HEAD
            $table->timestamps();
=======
>>>>>>> 739d530aac064e4ebe848619843028ee1c05253d
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_courses');
    }
}
