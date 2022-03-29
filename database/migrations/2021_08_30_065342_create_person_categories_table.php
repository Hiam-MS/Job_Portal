<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_categories', function (Blueprint $table) {
            
            $table->unsignedBigInteger('person_id');
            $table->unsignedBigInteger('category_id');
            
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('category_id')->references('cat_id')->on('job_categories')->onDelete('cascade');
            $table->primary(['person_id', 'category_id']);
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
        Schema::dropIfExists('person_categories');
    }
}
