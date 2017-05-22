<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examlines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('examcandidate_id')->references('id')->on('examcandidates');
            $table->integer('exam_id')->references('id')->on('exams');
            $table->integer('cohort_id')->references('id')->on('cohorts');
            $table->integer('remark_id')->references('id')->on('remarks');
            $table->enum('status', array('exit', 'candidate', 'graduated'));
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
        Schema::dropIfExists('examlines');
    }
}
