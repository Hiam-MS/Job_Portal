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
            $table->string('job_position');
            $table->integer('number_of_employess');
            $table->string('country');
            $table->string('city');
            $table->string('job_specialist')->nullable();
            $table->string('job_type')->nullable();
            $table->string('educational_lvl')->nullable();
            $table->string('gender')->nullable();
            $table->string('military_service')->nullable();
            $table->string('job_task')->nullable();
            $table->double('salary')->nullable();

            
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
