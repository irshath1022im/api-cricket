<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MatchPlayersResource extends JsonResource
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
            'line_id' => $this->id,
            'player_id' => $this->player_id,
            'name' => $this->player->name,
            'thumbnail' => $this->player->url,
            'batting_status' => $this->batting_status,
            'player_scores' => $this->scores->count()
        ];
    }
}
