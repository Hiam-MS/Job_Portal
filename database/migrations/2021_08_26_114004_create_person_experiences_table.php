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
            $table->string('Job Title');
            $table->string('job_Specialize');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('Start Date');
            $table->string('End Date');
            $table->string('Responsibilities');

            $table->unsignedInteger('person_id');
            $table->foreign('person_id')->references('id')->on('People')->onDelete('cascade');
            
            // $table->unsignedInteger('person_id');
            // $table->foreign('person_id')->referances('id')->on('People')->onDelete('cascade');
            
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
        Schema::dropIfExists('person_experiences');
    }
}
