<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Job_title');
            $table->string('job_Specialize');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('Start_date');
            $table->string('end_date');
            $table->string('Responsibilities');
            $table->unsignedBigInteger('person_id');
            $table->timestamps();
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
           // $table->foreignId('person_id')->constrained('People');
            
            // $table->unsignedInteger('person_id');
            // $table->foreign('person_id')->referances('id')->on('People')->onDelete('cascade');
            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_experiences');
    }
}
