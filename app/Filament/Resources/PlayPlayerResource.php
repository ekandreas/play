<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlayPlayerResource\Pages;
use App\Filament\Resources\PlayPlayerResource\RelationManagers;
use App\Models\PlayPlayer;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlayPlayerResource extends Resource
{
    protected static ?string $model = PlayPlayer::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Players';
    protected static ?int $navigationSort = 20;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label("Name"),
                Select::make('play_game_id')
                    ->label('Game')
                    ->relationship('playGame', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label("Name"),
                TextColumn::make('playGame.name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPlayPlayers::route('/'),
            'create' => Pages\CreatePlayPlayer::route('/create'),
            'edit' => Pages\EditPlayPlayer::route('/{record}/edit'),
        ];
    }
}
