<?php

namespace App\Filament\Resources\PlayCombatResource\Pages;

use App\Filament\Resources\PlayCombatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlayCombats extends ListRecords
{
    protected static string $resource = PlayCombatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
