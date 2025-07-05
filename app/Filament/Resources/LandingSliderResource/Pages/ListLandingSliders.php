<?php

namespace App\Filament\Resources\LandingSliderResource\Pages;

use App\Filament\Resources\LandingSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLandingSliders extends ListRecords
{
    protected static string $resource = LandingSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
