<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgendaResource\Pages;
use App\Filament\Resources\AgendaResource\RelationManagers;
use App\Models\Agenda;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DatePicker;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AgendaResource extends Resource
{
    protected static ?string $model = Agenda::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('id_user')
                ->default(auth()->id()),
                Forms\Components\TextInput::make('nama_agenda')  
                ->required(),
                Forms\Components\TextInput::make('tempat')
                ->required(),
                DatePicker::make('waktu_pelaksanaan')
                ->label('Tanggal Pelaksanaan')
                ->required()
                ->displayFormat('d F Y')
                ->format('Y-m-d')
                ->required(),  
                RichEditor::make('deskripsi')
                ->label('deskripsi agenda')
                ->required()
                ->toolbarButtons([
                    'bold',
                    'italic',
                    'underline',
                    'bulletList',
                    'orderedList',
                    'link'
                ])
                ->fileAttachmentsDirectory('Agenda/attachments')
                ->columnSpanFull(),
                Forms\Components\FileUpload::make('foto_agenda')  
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto_agenda'),
                Tables\Columns\TextColumn::make('nama_agenda'),
                Tables\Columns\TextColumn::make('tempat'),
                Tables\Columns\TextColumn::make('waktu_pelaksanaan'),
                Tables\Columns\TextColumn::make('deskripsi'),
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
            'index' => Pages\ListAgendas::route('/'),
            'create' => Pages\CreateAgenda::route('/create'),
            'edit' => Pages\EditAgenda::route('/{record}/edit'),
        ];
    }
}
