<?php

namespace App\Filament\Resources\BlogResource\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Blog;

class BlogStatusChart extends ChartWidget
{
    protected static ?string $heading = 'Published vs Unpublished Blogs';

    protected function getData(): array
    {
        $published = Blog::where('is_published', true)->count();
        $unpublished = Blog::where('is_published', false)->count();

        return [
            'datasets' => [
                [
                    'label' => 'Blogs',
                    'data' => [$published, $unpublished],
                    'backgroundColor' => ['#10B981', '#F59E0B'],
                ],
            ],
            'labels' => ['Published', 'Unpublished'],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
