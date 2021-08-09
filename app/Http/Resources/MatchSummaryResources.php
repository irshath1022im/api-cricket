<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MatchSummaryResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        // return [
        //     "id" => $this->id,
        //     "date" => $this->date,
        //     "team1" => $this->team1->name,
        //     "team2" => $this->oppenent_team,
        //     'matchSummary' =>$this->matchSummary
        // ];

           return [
            "id" => $this->id,
            'date' => $this->match->date,
            'status' => $this->match->status,
            'team1' => [
                'name' => $this->match->team1->name,
                'score' => $this->lions_scores,
                'wickets' => $this->lions_wickets,
                'overs' => $this->lions_over
            ],

            'opponent_team' => [
                'name' => $this->match->team2->name,
                'score' => $this->opponent_scores,
                'wickets' => $this->opponent_wickets,
                'overs' => $this->opponent_over
            ],
            'winning_summary' => $this->winning_summary,
            'lions_win_status' => $this->lions_win_status


        ];


    }



}
