<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreCard extends Model
{
    use HasFactory;

    protected $fillable = ['match_id'];

    public function match()
    {
        return $this->belongsTo(Match::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function match_summary()
    {
        return $this->hasOneThrough(
                    MatchSummary::class,
                    Match::class,
                    'id', // Foreign key on the Match table...
                    'match_id', // Foreign key on the MatchSummary table...
                    'match_id', // Local key on the MatchSummary table... Laravel Thru Key
                    'id' // Local key on the Match table...);

        );
    }

    public function played_players()
    {

        //scorecard has -> match_id
        //players primary key is ->id
        //matchPlayer has [ match_id, player_id]

        //we need data from players table who is listed in match player table for specific match based on score card match id
        //here we have to use match id as thruouh key because score card has match_id


        return $this->hasManyThrough(
                Players::class,   // get all the information
                MatchPlayer::class,  // thrue this table, who is listed for specific match
                'match_id',  //find the players id who played in specific match
                'id',       // based on above return, get the data from players id
                'id',       //
                'player_id'
        );
    }







}
