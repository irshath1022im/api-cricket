<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchPlayer extends Model
{
    use HasFactory;

    protected $fillable = ['match_id', 'player_id'];

    public function played_match()
    {
        return $this->belongsTo(Match::class);
    }

    public function player()
    {
        return $this->belongsTo(Players::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class, 'player_id', 'player_id');
    }


}
