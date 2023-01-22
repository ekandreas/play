<?php

namespace App\Filament\Resources\PlayGameResource\Pages;

use App\Filament\Resources\PlayGameResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlayGames extends ListRecords
{
    protected static string $resource = PlayGameResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
