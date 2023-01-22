<?php

namespace App\Http\Livewire\Play;

use Livewire\Component;

class TopList extends Component
{
    public int $gameId;

    public function mount($gameId) {
        $this->gameId = $gameId;
    }

    public function render()
    {
        return view('livewire.play.top-list');
    }
}
