<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'team_one_id', 'oppenent_team', 'remark'];

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
    

}
