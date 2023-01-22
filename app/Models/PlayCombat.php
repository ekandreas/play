<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayCombat extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function playRound() {
        return $this->belongsTo(PlayRound::class);
    }

    public function playMachine() {
        return $this->belongsTo(PlayMachine::class);
    }

    public function playPlayers() {
        return $this->belongsToMany(PlayPlayer::class);
    }

}
