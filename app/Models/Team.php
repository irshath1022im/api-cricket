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

    public function match()
    {
        return $this->belongsTo(Match::class);
    }
}
