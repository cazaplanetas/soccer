<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('team', 64)->unique();
            $table->tinyInteger('overall')->unsigned(); //Every point is half star.
            $table->mediumInteger('league_id')->unsigned();
            $table->foreign('league_id')->references('id')->on('leagues')->onDelete('CASCADE');
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
        Schema::drop('teams');
    }
}
