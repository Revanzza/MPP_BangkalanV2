<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OperationalHourResource\Pages;
use App\Filament\Resources\OperationalHourResource\RelationManagers;
use App\Models\OperationalHour;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\Toggle;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OperationalHourResource extends Resource
{
    protected static ?string $model = OperationalHour::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Jam Operasional';

    protected static ?string $modelLabel = 'Jam Operasional';
    protected static ?string $pluralModelLabel = 'Data Jam Operasional';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Hari')  
                ->required(),
                Forms\Components\TextInput::make('Jam_Buka')
                ->required(),
                Forms\Components\TextInput::make('Jam_Tutup')
                ->required(),
                Toggle::make('is_closed')
                ->label('Tutup/Buka')
                ->default(true) 
                ->onColor('success') 
                ->offColor('danger') 
                ->inline(false), 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('day'),
                Tables\Columns\TextColumn::make('open_time'),
                Tables\Columns\TextColumn::make('close_time'),
                Tables\Columns\TextColumn::make('is_closed')
                ->label('Status')
                ->formatStateUsing(fn (bool $state) => $state ? 'Buka' : 'Tutup')
                ->badge()
                ->color(fn (bool $state) => $state ? 'success' : 'danger'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListOperationalHours::route('/'),
            'create' => Pages\CreateOperationalHour::route('/create'),
            'edit' => Pages\EditOperationalHour::route('/{record}/edit'),
        ];
    }
}
