<?php

namespace App\Filament\Resources\PlayMachineCategoryResource\Pages;

use App\Filament\Resources\PlayMachineCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlayMachineCategories extends ListRecords
{
    protected static string $resource = PlayMachineCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
