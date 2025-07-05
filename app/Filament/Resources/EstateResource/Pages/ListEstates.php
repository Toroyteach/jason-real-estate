<?php

namespace App\Filament\Resources\EstateResource\Pages;

use App\Filament\Resources\EstateResource;
use App\Filament\Resources\EstateResource\Widgets\EstateAppointmentChart;
use App\Filament\Resources\EstateResource\Widgets\EstateEnquiryChart;
use App\Filament\Resources\EstateResource\Widgets\EstateFeedbackChart;
use App\Filament\Resources\EstateResource\Widgets\EstateTypesChart;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEstates extends ListRecords
{
    protected static string $resource = EstateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            EstateEnquiryChart::class,
            EstateAppointmentChart::class,
            EstateTypesChart::class,
            EstateFeedbackChart::class
        ];
    }
}
