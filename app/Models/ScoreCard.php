<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreCard extends Model
{
    use HasFactory;

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




}
