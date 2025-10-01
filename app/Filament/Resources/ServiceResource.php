<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str; 
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-magnifying-glass';

    protected static ?string $navigationLabel = 'Layanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Data Service
                Select::make('id_institution')
                    ->relationship('institution', 'nama_institution')
                    ->label('Institusi')
                    ->required(),

                TextInput::make('nama_layanan')
                    ->label('Nama Layanan')
                    ->required()
                    ->maxLength(255),

                // Daftar Persyaratan (RichEditor)
                Repeater::make('persyaratan')
                    ->relationship()
                    ->schema([
                        RichEditor::make('deskripsi_persyaratan')
                            ->label('Deskripsi Persyaratan')
                            ->toolbarButtons([
                                'bold', 'italic', 'underline',
                                'bulletList', 'orderedList',
                                'link', 'blockquote'
                            ])
                            ->columnSpanFull()
                    ])
                    ->label('Daftar Persyaratan')
                    ->collapsible()
                    ->defaultItems(1)
                    ->columnSpanFull(),

                // Daftar Mekanisme (RichEditor)
                Repeater::make('mekanisme')
                    ->relationship()
                    ->schema([
                        RichEditor::make('deskripsi_mekanisme')
                            ->label('Deskripsi Mekanisme')
                            ->toolbarButtons([
                                'bold', 'italic', 'underline',
                                'bulletList', 'orderedList',
                                'link', 'blockquote'
                            ])
                            ->columnSpanFull()
                    ])
                    ->label('Daftar Mekanisme')
                    ->collapsible()
                    ->defaultItems(1)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('institution.nama_institution')
                    ->label('Institusi')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('nama_layanan')
                    ->label('Layanan')
                    ->searchable(),
                
                // Menampilkan daftar persyaratan
                TextColumn::make('persyaratan.deskripsi_persyaratan')
                    ->label('Persyaratan')
                    ->formatStateUsing(fn ($record) => 
                        Str::limit(
                            $record->persyaratan->pluck('deskripsi_persyaratan')->implode(' • '), 
                            50
                        )
                    )
                    ->tooltip(fn ($record) => 
                        $record->persyaratan->pluck('deskripsi_persyaratan')->implode('\n\n')
                    ), // Render sebagai markdown
                
                // Menampilkan daftar mekanisme
                TextColumn::make('mekanisme.deskripsi_mekanisme')
                    ->label('Mekanisme')
                    ->formatStateUsing(fn ($record) => 
                        Str::limit(
                            $record->mekanisme->pluck('deskripsi_mekanisme')->implode(' • '), 
                            50
                        )
                    )
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('id_institutions')
                    ->relationship('institution','nama_institution')
                    ->label('Select Institution')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}