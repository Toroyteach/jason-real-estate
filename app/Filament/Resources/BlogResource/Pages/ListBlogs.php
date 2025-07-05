<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use App\Filament\Resources\BlogResource\Widgets\BlogEngagementChart;
use App\Filament\Resources\BlogResource\Widgets\BlogPostsChart;
use App\Filament\Resources\BlogResource\Widgets\BlogStatusChart;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogs extends ListRecords
{
    protected static string $resource = BlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            BlogPostsChart::class,
            BlogStatusChart::class,
            BlogEngagementChart::class
        ];
    }
}
