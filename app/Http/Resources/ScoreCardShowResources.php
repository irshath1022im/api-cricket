<?php

namespace App\Http\Resources;

use App\Models\MatchPlayer;
use Illuminate\Http\Resources\Json\JsonResource;

class ScoreCardShowResources extends JsonResource
{
    /**
     * nsform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) {

        // return parent::toArray($request);
        return [
            'date' => $this->match->date,
            'match_id' => $this->match_id,
            'team_01' => 'Lions CC',
            'opponent_team' => $this->match->team2->name,
            'match_status' => $this->match->status,
            'scores_count' => $this->scores->count(),
            'batting_runs' => $this->scores->sum('batting_runs'),
            'team_runs' => $this->scores->sum('team_runs'),
            'wickets' => $this->scores->whereIn('batting_status', 'out')->count(),
            'over' => $this->scores->sortBy([
                ['over', 'desc']
            ])->take(1),
            'scores' => $this->scores->sortBy([
                ['id', 'desc']
            ])->take(10)
        ];
    }
}
