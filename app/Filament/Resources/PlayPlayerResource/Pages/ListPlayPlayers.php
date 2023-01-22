<?php

namespace App\Filament\Resources\PlayPlayerResource\Pages;

use App\Filament\Resources\PlayPlayerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlayPlayers extends ListRecords
{
    protected static string $resource = PlayPlayerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
