<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('job_title');
            $table->integer('number_of_employess');
            $table->string('salary');
            $table->string('job_requirement');
            $table->string('functional_tasks');
            $table->string('country');
            $table->string('city');
            $table->string('gender');
            $table->string('military_service');
            $table->string('degree');
            $table->string('job_type');
            
           
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
        Schema::dropIfExists('jobs');
    }
}
