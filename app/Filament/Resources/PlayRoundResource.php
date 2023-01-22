<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlayRoundResource\Pages;
use App\Filament\Resources\PlayRoundResource\RelationManagers;
use App\Models\PlayRound;
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

class PlayRoundResource extends Resource
{
    protected static ?string $model = PlayRound::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Rounds';
    protected static ?int $navigationSort = 40;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('number')
                    ->numeric()
                    ->required()
                    ->default(1),
                Select::make('play_game_id')
                    ->label('Game')
                    ->relationship('playGame', 'name')
                    ->required(),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('number')
                    ->label('Number'),
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
            'index' => Pages\ListPlayRounds::route('/'),
            'create' => Pages\CreatePlayRound::route('/create'),
            'edit' => Pages\EditPlayRound::route('/{record}/edit'),
        ];
    }
}
