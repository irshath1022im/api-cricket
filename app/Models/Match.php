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


}
