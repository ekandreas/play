<?php

namespace App\Filament\Resources\PlayRoundResource\Pages;

use App\Filament\Resources\PlayRoundResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlayRounds extends ListRecords
{
    protected static string $resource = PlayRoundResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
