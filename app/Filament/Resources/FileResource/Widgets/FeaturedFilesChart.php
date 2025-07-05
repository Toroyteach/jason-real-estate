<?php

namespace App\Filament\Resources\FilerResource\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\File;

class FeaturedFilesChart extends ChartWidget
{
    protected static ?string $heading = 'Featured vs Non-Featured Files';

    protected function getData(): array
    {
        $featured = File::where('is_featured', true)->count();
        $nonFeatured = File::where('is_featured', false)->count();

        return [
            'datasets' => [
                [
                    'label' => 'Files',
                    'data' => [$featured, $nonFeatured],
                    'backgroundColor' => ['#3B82F6', '#9CA3AF'],
                ],
            ],
            'labels' => ['Featured', 'Non-Featured'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
