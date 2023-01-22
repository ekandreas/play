<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Cookie;

class PlayPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.play-page';

    protected ?string $maxContentWidth = "full";

    public int $gameId;

    public function mount() {
        $this->gameId = (int)Cookie::get('play-game');
        if(!$this->gameId) $this->redirect('/play-games');
    }
}
