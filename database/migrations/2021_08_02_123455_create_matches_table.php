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
            $table->id();
            $table->string('date');
            $table->unsignedBigInteger('team_one_id');
            $table->unsignedBigInteger('oppenent_team');
            $table->string('status');

            $table->foreign('team_one_id')->references('id')->on('teams');
            $table->foreign('oppenent_team')->references('id')->on('teams');

            $table->text('remark')->nullable();
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
