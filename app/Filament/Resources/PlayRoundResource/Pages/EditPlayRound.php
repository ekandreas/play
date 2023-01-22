<?php

namespace App\Filament\Resources\PlayRoundResource\Pages;

use App\Filament\Resources\PlayRoundResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlayRound extends EditRecord
{
    protected static string $resource = PlayRoundResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
