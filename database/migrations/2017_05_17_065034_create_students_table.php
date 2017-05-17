<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('student_firstname');
            $table->string('student_lastname');
            $table->string('student_studentnumber');
            $table->integer('student_education_id');
            $table->integer('student_cohort_id');
            $table->integer('student_wpthbe_id');
            $table->integer('student_pvb_id');
            $table->integer('student_og_id');
            $table->integer('student_remarks_id');
            $table->boolean('student_graduated');
            $table->boolean('student_exit');
            $table->datetime('student_created_at');
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
        Schema::dropIfExists('students');
    }
}
