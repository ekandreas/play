<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayMachine extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function playMachineCategory() {
        return $this->belongsTo(PlayMachineCategory::class);
    }

}
