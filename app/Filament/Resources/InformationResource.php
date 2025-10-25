<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformationResource\Pages;
use App\Filament\Resources\InformationResource\RelationManagers;
use App\Models\Information;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformationResource extends Resource
{
    protected static ?string $model = Information::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = 'Informasi Berita';

    protected static ?string $modelLabel = 'Informasi';
    protected static ?string $pluralModelLabel = 'Data Informasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('id_user')
                ->default(auth()->id()),
                Forms\Components\TextInput::make('judul')  
                ->required(),
                RichEditor::make('isi')
                ->label('Konten Informasi')
                ->required()
                ->toolbarButtons([
                    'bold',
                    'italic',
                    'underline',
                    'bulletList',
                    'orderedList',
                    'link'
                ])
                ->fileAttachmentsDirectory('information/attachments')
                ->columnSpanFull(),
                Forms\Components\TextInput::make('kategori')
                ->required(),
                Forms\Components\FileUpload::make('foto_information')  
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto_information'),
                Tables\Columns\TextColumn::make('judul'),
                Tables\Columns\TextColumn::make('isi'),
                Tables\Columns\TextColumn::make('kategori'),
                Tables\Columns\TextColumn::make('user.name')
                ->label('Dibuat Oleh'),
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
            'index' => Pages\ListInformation::route('/'),
            'create' => Pages\CreateInformation::route('/create'),
            'edit' => Pages\EditInformation::route('/{record}/edit'),
        ];
    }
}