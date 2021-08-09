<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->foreign('score_card_id')->references('id')->on('score_cards');
            $table->string('ball_status');
            $table->string('batting_status');
            $table->integer('over');
            $table->string('bowler');
            $table->foreign('player_id')->references('id')->on('players');
            $table->integer('batting_runs');
            $table->integer('team_runs');
            $table->boolean('over_ended');
            $table->unsignedBigInteger('player_id');
            $table->unsignedBigInteger('score_card_id')->index();
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
        Schema::dropIfExists('scores');
    }
}
