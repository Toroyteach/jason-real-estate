<?php

namespace App\Filament\Resources\BlogResource\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Blog;

class BlogEngagementChart extends ChartWidget
{
    protected static ?string $heading = 'Blog Views & Likes';

    protected function getData(): array
    {
        $totalViews = Blog::sum('views_count');
        $totalLikes = Blog::sum('likes_count');

        return [
            'datasets' => [
                [
                    'label' => 'Engagement',
                    'data' => [$totalViews, $totalLikes],
                    'backgroundColor' => ['#3B82F6', '#EF4444'],
                ],
            ],
            'labels' => ['Total Views', 'Total Likes'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
