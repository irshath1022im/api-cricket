<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ScoreCardsResource extends JsonResource
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
            'score_card_id' => $this->id,
            'date' => $this->match->date,
            'match_id' => $this->match_id,
            'team_01' => 'Lions CC',
            'opponent_team' => $this->match->team2->name,
            'match_status' => $this->match->status,
        ];
    }
}
