<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->integer('reward_type_id')->unsigned();
            $table->integer('hero_id')->unsigned()->nullable();
            $table->integer('cost')->nullable();
            $table->integer('currency_id')->unsigned()->nullable();
            $table->integer('quality_id')->unsigned()->nullable();

            $table->foreign('reward_type_id')->references('id')->on('reward_types');
            $table->foreign('hero_id')->references('id')->on('heroes');
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->foreign('quality_id')->references('id')->on('qualities');

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
        Schema::drop('rewards');
    }
}
