<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('map_stages', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('map_id')->unsigned();
            $table->string('name');

            $table->foreign('map_id')->references('id')->on('maps');

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
        Schema::drop('map_stages');
    }
}
