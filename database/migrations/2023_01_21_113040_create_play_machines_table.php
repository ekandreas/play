<?php

use App\Models\PlayMachineCategory;
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
        Schema::create('play_machines', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('number');
            $table->string('name');
            $table->foreignIdFor(PlayMachineCategory::class);
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
        Schema::dropIfExists('play_machines');
    }
};
