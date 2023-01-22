<?php

use App\Models\PlayCombat;
use App\Models\PlayMachine;
use App\Models\PlayPlayer;
use App\Models\PlayRound;
use App\Models\PlayUser;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('play_combats', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PlayRound::class);
            $table->foreignIdFor(PlayMachine::class);
            $table->timestamps();
        });
        Schema::create('play_combat_play_player', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PlayCombat::class);
            $table->foreignIdFor(PlayPlayer::class);
            $table->unsignedInteger('points')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('play_combats');
        Schema::dropIfExists('play_combat_player');
    }
};
