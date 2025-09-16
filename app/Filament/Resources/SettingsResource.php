<?php

namespace App\Filament\Resources;

use App\Models\Setting;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Tables\Table;
use Filament\Tables;

class SettingsResource extends Resource
{
    protected static ?string $model = Setting::class;
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel = 'Pengaturan Antrean';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('queue_enabled')
                    ->label('Fitur Antrean Online Aktif')
                    ->onColor('success')
                    ->offColor('danger'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('queue_enabled')
                    ->boolean()
                    ->label('Antrean Online Aktif'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }
}
