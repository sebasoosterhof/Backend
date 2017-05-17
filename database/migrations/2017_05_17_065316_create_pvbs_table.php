<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvbs', function (Blueprint $table) {
            $table->increments('pvb_id');
            $table->string('pvb_description');
            $table->string('pvb_status');
            $table->integer('pvb_status_id');
            $table->datetime('pvb_requested_at');
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
        Schema::dropIfExists('pvbs');
    }
}
