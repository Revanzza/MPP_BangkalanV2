<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use Filament\Forms\Components\Select;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-magnifying-glass';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('IDInstitution')
                ->label('Institusi')
                ->relationship('institution', 'nama_institution') // 'institution' adalah nama relasi di Model
                ->required(),
                Forms\Components\TextInput::make('nama_layanan')  
                ->required(),
                Forms\Components\TextInput::make('deskripsi'),
                Forms\Components\TextInput::make('persyaratan'),
                Forms\Components\TextInput::make('alur'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('institution.nama_institution') // Akses relasi
                ->label('Nama Institusi')
                ->sortable() // 1. Aktifkan sorting
                ->searchable(), // 2. Aktifkan pencarian
                Tables\Columns\TextColumn::make('nama_layanan'),
                Tables\Columns\TextColumn::make('deskripsi'),
                Tables\Columns\TextColumn::make('persyaratan'),
                Tables\Columns\TextColumn::make('alur'),
            ])
            ->defaultSort('institution.nama_institution', 'asc')
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
