<?php

namespace App\Filament\Resources\LandingSliderResource\Pages;

use App\Filament\Resources\LandingSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLandingSlider extends ViewRecord
{
    protected static string $resource = LandingSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
