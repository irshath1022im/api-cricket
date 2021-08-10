<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchPlayer extends Model
{
    use HasFactory;

    public function played_match()
    {
        return $this->belongsTo(Match::class);
    }

    public function player()
    {
        return $this->belongsTo(Players::class);
    }


}
