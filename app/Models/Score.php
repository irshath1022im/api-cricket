<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = ['ball_status', 'batting_status', 'over', 'bowler', 'batting_runs', 'team_runs', 'over_ended', 'player_id', 'score_card_id'];

    public function score_card()
    {
        return $this->belongsTo(ScoreCard::class);
    }
}
