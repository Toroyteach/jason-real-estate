<?php

namespace App\Filament\Resources\FileResource\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\File;

class DownloadableFilesChart extends ChartWidget
{
    protected static ?string $heading = 'Downloadable Files Overview';

    protected function getData(): array
    {
        $downloadable = File::where('is_downloadable', true)->count();
        $nonDownloadable = File::where('is_downloadable', false)->count();

        return [
            'datasets' => [
                [
                    'label' => 'Download Option',
                    'data' => [$downloadable, $nonDownloadable],
                    'backgroundColor' => ['#10B981', '#F87171'],
                ],
            ],
            'labels' => ['Downloadable', 'Not Downloadable'],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
