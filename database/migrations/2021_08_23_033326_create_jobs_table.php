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
            $table->string('budget');
            
            $table->text('job_requirement');
            $table->text('functional_tasks');
            $table->string('country');
            $table->string('city');
            $table->string('gender');
            $table->string('military_service');
            $table->string('degree');
            $table->string('job_type');
            $table->date('end_job');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('job_categories')->onDelete('cascade');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            
           
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
