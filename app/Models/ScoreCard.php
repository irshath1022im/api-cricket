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


}
