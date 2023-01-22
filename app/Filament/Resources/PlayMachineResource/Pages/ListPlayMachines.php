<?php

namespace App\Filament\Resources\PlayMachineResource\Pages;

use App\Filament\Resources\PlayMachineResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlayMachines extends ListRecords
{
    protected static string $resource = PlayMachineResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
