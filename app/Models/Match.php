<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'team_one_id', 'oppenent_team', 'remark','status'];

    public function team1()
    {
        return $this->belongsTo(Team::class,'team_one_id');
    }

    public function team2()
    {
        return $this->belongsTo(Team::class,'oppenent_team');
    }

    public function matchSummary()
    {

        return $this->hasOne(MatchSummary::class);

    }

    public function score_card()
    {
        return $this->hasMany(ScoreCard::class);
    }

    public function played_players()
    {
        return $this->hasMany(MatchPlayer::class);
    }


}
