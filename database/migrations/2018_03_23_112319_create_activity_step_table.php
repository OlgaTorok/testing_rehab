<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityStepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_step', function (Blueprint $table) {
            $table->increments('id');
           $table->integer('activity_id')->unsigned();
           $table->integer('step_id')->unsigned();
           $table->timestamps();

           $table->foreign('activity_id')->references('id')->on('activities');
           $table->foreign('step_id')->references('id')->on('steps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_step');
    }
}
