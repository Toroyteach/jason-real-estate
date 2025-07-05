<?php

namespace App\Filament\Resources\EstateResource\Pages;

use App\Filament\Resources\EstateResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEstate extends ViewRecord
{
    protected static string $resource = EstateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
