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
            $table->integer('examcandidate_id');
            $table->integer('exam_id');
            $table->integer('cohort_id');
            $table->integer('remark_id');
            $table->number('status');
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
