<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayRound extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function playGame() {
        return $this->belongsTo(PlayGame::class);
    }

}
