<?php

namespace App\Filament\Resources\FileResource\Pages;

use App\Filament\Resources\FileResource;
use App\Filament\Resources\FileResource\Widgets\DownloadableFilesChart;
use App\Filament\Resources\FilerResource\Widgets\FeaturedFilesChart;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFiles extends ListRecords
{
    protected static string $resource = FileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            DownloadableFilesChart::class,
            FeaturedFilesChart::class
        ];
    }
}
