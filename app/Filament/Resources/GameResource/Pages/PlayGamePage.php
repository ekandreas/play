<?php

namespace App\Filament\Resources\GameResource\Pages;

use App\Filament\Resources\GameResource;
use Filament\Resources\Pages\Page;

class PlayGamePage extends Page
{
    protected static string $resource = GameResource::class;

    protected static string $view = 'filament.resources.game-resource.pages.play-game-page';
}
