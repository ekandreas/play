<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GameResource\Pages\PlayGamePage;
use App\Filament\Resources\PlayCombatResource\Pages;
use App\Filament\Resources\PlayCombatResource\RelationManagers;
use App\Models\PlayCombat;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlayCombatResource extends Resource
{
    protected static ?string $model = PlayCombat::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Combats';
    protected static ?int $navigationSort = 50;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('play_round_id')
                    ->label('Round')
                    ->relationship('playRound', 'number')
                    ->required(),
                Select::make('play_machine_id')
                    ->label('Machine')
                    ->relationship('playMachine', 'name')
                    ->required(),
                Select::make('play_player_id')
                    ->multiple()
                    ->label('Player')
                    ->relationship('playPlayers', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('playRound.playGame.name')
                    ->label('Game'),
                TextColumn::make('playRound.number')
                    ->label('Round'),
                //
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
            'index' => Pages\ListPlayCombats::route('/'),
            'create' => Pages\CreatePlayCombat::route('/create'),
            'edit' => Pages\EditPlayCombat::route('/{record}/edit'),
            'view' => PlayGamePage::route('/{record}/view'),
        ];
    }
}
