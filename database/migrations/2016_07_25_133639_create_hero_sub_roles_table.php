<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroSubRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hero_sub_roles', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('hero_id')->unsigned();
            $table->integer('sub_role_id')->unsigned();

            $table->foreign('hero_id')->references('id')->on('heroes');
            $table->foreign('sub_role_id')->references('id')->on('sub_roles');

            $table->unique(['hero_id', 'sub_role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hero_sub_roles');
    }
}
