<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlayGameResource\Pages;
use App\Filament\Resources\PlayGameResource\RelationManagers;
use App\Models\PlayGame;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

class PlayGameResource extends Resource
{
    protected static ?string $model = PlayGame::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Games';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->required()
                ->label("Name"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label("Name"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('view-action')
                    ->label('View')
                    ->icon('heroicon-o-eye')
                    ->action(function(Model $record) {
                        Cookie::queue('play-game', $record->id);
                        return Redirect::to('/play-page');
                    }),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlayGames::route('/'),
            'create' => Pages\CreatePlayGame::route('/create'),
            'edit' => Pages\EditPlayGame::route('/{record}/edit'),
        ];
    }
}
