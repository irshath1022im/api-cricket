<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'dob', 'url', 'country', 'batting_style', 'remark', 'team_id'];

    public function team()
    {
      return  $this->belongsTo(Team::class);
    }
}
