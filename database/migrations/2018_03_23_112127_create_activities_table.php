<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('short_descript');
            $table->string('description', 255);
            $table->string('picture')->default('default.jpg');
            $table->integer('level_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('rating_id')->unsigned();
            $table->integer('emoji_id')->unsigned();
            $table->integer('tip_id')->unsigned()->nullable($value = true);
            $table->timestamps();

            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('rating_id')->references('id')->on('ratings');
            $table->foreign('emoji_id')->references('id')->on('emojis');
            $table->foreign('tip_id')->references('id')->on('tips');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
