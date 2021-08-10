<?php

namespace App\Http\Resources;

use App\Models\MatchPlayer;
use Illuminate\Http\Resources\Json\JsonResource;

class ScoreCardShowResources extends JsonResource
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
        return [
            'date' => $this->match->date,
            'match_id' => $this->match_id,
            'team_01' => 'Lions CC',
            'opponent_team' => $this->match->team2->name,
            'match_status' => $this->match->status,
            'players' =>$this->match->matchPlayers,
            'scores_count' => $this->scores->count(),
            'scores' => $this->scores,
            'total_battingRuns' => $this->
        ];
    }
}
