<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('job_cat');
            $table->string('job_location');
            $table->integer('user_id');
            $table->string('job_title');
            $table->string('job_type');
            $table->string('job_industry');
            $table->string('business_funcation');
            $table->string('designation');
            $table->string('salary_to');
            $table->string('salary_from');
            $table->string('application_last_date');
            $table->string('education_qualification');
            $table->string('exprience');
            $table->string('age');
            $table->string('gender');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('company_website_link');
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
