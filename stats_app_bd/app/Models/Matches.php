<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teams;
use App\Models\Competitions;

class Matches extends Model
{
    use HasFactory;
    protected $fillable = ['local_team', 'visitor_team', 'stadium', 'date', 'status', 'competition_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function visitorTeam()
    {
        return $this->hasMany(Teams::class, 'visitor_team');
    }

    public function localTeam()
    {
        return $this->hasMany(Teams::class, 'local_team');
    }

    public function competition()
    {
        return $this->hasMany(Competitions::class, 'competition_id');
    }
}
