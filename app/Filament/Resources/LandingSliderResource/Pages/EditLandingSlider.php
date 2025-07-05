<?php

namespace App\Filament\Resources\LandingSliderResource\Pages;

use App\Filament\Resources\LandingSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLandingSlider extends EditRecord
{
    protected static string $resource = LandingSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
