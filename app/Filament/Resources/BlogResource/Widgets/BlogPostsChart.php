<?php

namespace App\Filament\Resources\BlogResource\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Blog;

class BlogPostsChart extends ChartWidget
{
    protected static ?string $heading = 'Blog Posts This Year';

    protected function getData(): array
    {
        $data = Blog::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $months = collect(range(1, 12))->map(function ($month) {
            return now()->setMonth($month)->format('M');
        });

        $counts = $months->map(function ($monthName, $index) use ($data) {
            $monthData = $data->firstWhere('month', $index + 1);
            return $monthData ? $monthData->count : 0;
        });

        return [
            'datasets' => [
                [
                    'label' => 'Posts',
                    'data' => $counts,
                    'backgroundColor' => '#3B82F6',
                ],
            ],
            'labels' => $months->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
