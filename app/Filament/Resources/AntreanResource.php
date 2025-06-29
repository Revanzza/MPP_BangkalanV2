<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AntreanResource\Pages;
use App\Filament\Resources\AntreanResource\RelationManagers;
use App\Models\Antrean;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AntreanResource extends Resource
{
    protected static ?string $model = Antrean::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->required(),
                Forms\Components\TextInput::make('nik')->required(),
                Forms\Components\TextInput::make('no_hp')->label('No. HP')->required(),
                Forms\Components\DatePicker::make('tanggal')->label('Tanggal')->required(),
                Forms\Components\Select::make('id_service')
                    ->label('Layanan')
                    ->relationship('service', 'nama_layanan')
                    ->required(),
                Forms\Components\TextInput::make('nomer_antrean')->label('Nomor Antrean')->required(),
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'menunggu' => 'Menunggu',
                        'dipanggil' => 'Dipanggil',
                        'selesai' => 'Selesai',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama'),
                Tables\Columns\TextColumn::make('nik')->label('NIK'),
                Tables\Columns\TextColumn::make('no_hp')->label('No. HP'),
                Tables\Columns\TextColumn::make('tanggal')->label('Tanggal')->date(),
                Tables\Columns\TextColumn::make('service.nama_layanan')->label('Layanan'),
                Tables\Columns\TextColumn::make('service.institution.nama_institution')->label('Instansi'),
                Tables\Columns\TextColumn::make('nomer_antrean')->label('Nomor Antrean'),
                Tables\Columns\TextColumn::make('status')->label('Status')->badge()->color(fn($state) => match($state) {
                    'menunggu' => 'gray',
                    'dipanggil' => 'warning',
                    'selesai' => 'success',
                    default => 'secondary',
                }),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat')->dateTime('d M Y H:i'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAntreans::route('/'),
            'create' => Pages\CreateAntrean::route('/create'),
            'edit' => Pages\EditAntrean::route('/{record}/edit'),
        ];
    }
}
