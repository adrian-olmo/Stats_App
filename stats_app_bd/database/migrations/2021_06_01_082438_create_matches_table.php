<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('local_team');
            $table->foreign('local_team')->references('id')->on('teams');

            $table->unsignedBigInteger('visitor_team');
            $table->foreign('visitor_team')->references('id')->on('teams');

            $table->string('stadium');
            $table->date('date');
            $table->string('status');

            $table->unsignedBigInteger('competition_id');
            $table->foreign('competition_id')->references('id')->on('competitions');

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
        Schema::dropIfExists('matches');
    }
}
