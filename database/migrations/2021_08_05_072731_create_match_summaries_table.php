<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_summaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('match_id');
            $table->integer('over');
            $table->string('ground');
            $table->string('toss_winner');
            $table->string('choosed');
            $table->integer('lions_scores');
            $table->integer('lions_wickets');
            $table->integer('lions_over');
            $table->integer('opponent_scores');
            $table->integer('opponent_wickets');
            $table->integer('opponent_over');
            $table->text('winning_summary');
            $table->string('lions_win_status');
            $table->foreign('match_id')->references('id')->on('matches');
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
        Schema::dropIfExists('match_summaries');
    }
}
