<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abilities', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->integer('hero_id')->unsigned();
            $table->tinyInteger('is_ultimate')->default(0);

            $table->foreign('hero_id')->references('id')->on('heroes');

            $table->unique(['name', 'hero_id']);
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
        Schema::drop('abilities');
    }
}
