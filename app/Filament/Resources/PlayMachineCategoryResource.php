<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlayMachineCategoryResource\Pages;
use App\Filament\Resources\PlayMachineCategoryResource\RelationManagers;
use App\Models\PlayMachineCategory;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlayMachineCategoryResource extends Resource
{
    protected static ?string $model = PlayMachineCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Categories';
    protected static ?int $navigationSort = 110;

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
            'index' => Pages\ListPlayMachineCategories::route('/'),
            'create' => Pages\CreatePlayMachineCategory::route('/create'),
            'edit' => Pages\EditPlayMachineCategory::route('/{record}/edit'),
        ];
    }
}
