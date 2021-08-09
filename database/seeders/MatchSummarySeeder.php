<?php

namespace Database\Seeders;

use App\Models\MatchSummary;
use Illuminate\Database\Seeder;

class MatchSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $summaries = [
            [
                'match_id' => 1,
                'over' => 10,
                'ground' => 'Al Saad',
                'toss_winner' => 'Team 2',
                'choosed' => 'Batting First',
                 'lions_scores' => 152,
                 'lions_wickets' => 8,
                 'lions_over' => 10,
                 'opponent_scores' => 150,
                 'opponent_wickets' => 10,
                 'opponent_over' => 10,
                 'winning_summary' => 'Team one has won the match by 2 Runs',
                 'lions_win_status' => 'lost',
            ],
            [
                'match_id' => 2,
                'over' => 10,
                'ground' => 'Al Saad',
                'toss_winner' => 'Team 1',
                'choosed' => 'Batting First',
                 'lions_scores' => 165,
                 'lions_wickets' => 8,
                 'lions_over' => 10,
                 'opponent_scores' => 167,
                 'opponent_wickets' => 6,
                 'opponent_over' => 9.2,
                 'winning_summary' => 'Team one has won the match by 4 Wickets and 4 balls',
                 'lions_win_status' => 'Won',
             ]
            ];


            foreach($summaries as $summary) {
                MatchSummary::create($summary);

            }


    }
}
