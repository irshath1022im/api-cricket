<?php

namespace Database\Seeders;

use App\Models\MatchPlayer;
use Illuminate\Database\Seeder;

class MatchPlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $players = [
            ['match_id' => 1, 'player_id' => 1],
            ['match_id' => 1, 'player_id' => 2],
            ['match_id' => 1, 'player_id' => 3],
            ['match_id' => 1, 'player_id' => 4],
            ['match_id' => 1, 'player_id' => 5],
            ['match_id' => 2, 'player_id' => 1],
            ['match_id' => 2, 'player_id' => 3],
            ['match_id' => 2, 'player_id' => 6],
        ];

        foreach ( $players as $player) {
            MatchPlayer::create($player);
        }
    }
}
