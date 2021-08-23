<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->integer('hero_id')->unsigned()->nullable();
            $table->integer('reward_id')->unsigned();

            $table->foreign('hero_id')->references('id')->on('heroes');
            $table->foreign('reward_id')->references('id')->on('rewards');

            $table->unique('name');
            $table->unique('reward_id');
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('achievements');
    }
}
