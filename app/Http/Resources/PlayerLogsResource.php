<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayerLogsResource extends JsonResource
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
            'player' => $this->player_id,
            'player_name' => $this->player->name,
            'scores' => $this->scores,
            'batting_runs' => $this->scores->sum('batting_runs'),
            'faced_balls' => $this->scores->countBy('ball_status'),
            'byRuns' => $this->scores
                        ->where('ball_status', 'ok')
                        ->whereIn('batting_runs', [4,6])
                        ->countBy('batting_runs'),
          
        ];
    }
}
