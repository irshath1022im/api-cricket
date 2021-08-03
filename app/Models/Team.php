<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'thumbnail'];

    public function players()
    {
       return  $this->hasMany(Players::class);
    }

    public function matches()
    {
        return $this->belongsToMany(Match::class, 'teams','team_one_id','opponent_id');
    }


}
