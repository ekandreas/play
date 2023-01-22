<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlayMachineResource\Pages;
use App\Filament\Resources\PlayMachineResource\RelationManagers;
use App\Models\PlayMachine;
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

class PlayMachineResource extends Resource
{
    protected static ?string $model = PlayMachine::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Machines';
    protected static ?int $navigationSort = 100;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('number')
                    ->required()
                    ->numeric()
                    ->label("Number"),
                TextInput::make('name')
                    ->required()
                    ->label("Name"),
                Select::make('play_machine_category_id')
                    ->label('Category')
                    ->relationship('playMachineCategory', 'name')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('number')
                    ->label("Number"),
                    TextColumn::make('name')
                    ->label("Name"),
                TextColumn::make('playMachineCategory.name')
                    ->label("Category"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('number');
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
            'index' => Pages\ListPlayMachines::route('/'),
            'create' => Pages\CreatePlayMachine::route('/create'),
            'edit' => Pages\EditPlayMachine::route('/{record}/edit'),
        ];
    }
}
