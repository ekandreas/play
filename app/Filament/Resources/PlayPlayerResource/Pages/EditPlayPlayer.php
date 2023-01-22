<?php

namespace App\Filament\Resources\PlayPlayerResource\Pages;

use App\Filament\Resources\PlayPlayerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlayPlayer extends EditRecord
{
    protected static string $resource = PlayPlayerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
