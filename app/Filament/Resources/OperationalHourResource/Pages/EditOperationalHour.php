<?php

namespace App\Filament\Resources\OperationalHourResource\Pages;

use App\Filament\Resources\OperationalHourResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOperationalHour extends EditRecord
{
    protected static string $resource = OperationalHourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
