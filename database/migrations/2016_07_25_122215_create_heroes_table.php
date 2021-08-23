<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->integer('role_id')->unsigned();
            $table->smallInteger('health');
            $table->smallInteger('armour');
            $table->smallInteger('shield');
            $table->string('real_name');
            $table->smallInteger('age')->nullable();
            $table->smallInteger('height')->nullable();
            $table->string('affiliation')->nullable();
            $table->string('base_of_operations')->nullable();
            $table->tinyInteger('difficulty');

            $table->foreign('role_id')->references('id')->on('roles');

            $table->unique('name');
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
        Schema::drop('heroes');
    }
}
