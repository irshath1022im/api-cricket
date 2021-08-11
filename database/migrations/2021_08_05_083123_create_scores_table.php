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
            $table->string('ball_status');
            $table->string('batting_status');
            $table->unsignedBigInteger('opponent_player_id');
            $table->decimal('over', $precision = 9, $scale=1);
            $table->integer('batting_runs');
            $table->integer('team_runs');
            $table->boolean('over_ended');
            $table->unsignedBigInteger('player_id');
            $table->unsignedBigInteger('score_card_id')->index();

            $table->foreign('score_card_id')->references('id')->on('score_cards');
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('opponent_player_id')->references('id')->on('opponent_players');

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
