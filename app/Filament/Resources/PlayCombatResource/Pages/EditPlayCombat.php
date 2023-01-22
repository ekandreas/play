<?php

namespace App\Filament\Resources\PlayCombatResource\Pages;

use App\Filament\Resources\PlayCombatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlayCombat extends EditRecord
{
    protected static string $resource = PlayCombatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
