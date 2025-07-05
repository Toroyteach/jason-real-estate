<?php

namespace App\Filament\Resources\EstateResource\Widgets;

use App\Models\EstateFeedback;
use Filament\Widgets\ChartWidget;

class EstateFeedbackChart extends ChartWidget
{
    protected static ?string $heading = 'Estate Feedback Ratings';

    protected function getData(): array
    {
        $ratings = EstateFeedback::selectRaw('rating, COUNT(*) as count')
            ->groupBy('rating')
            ->orderBy('rating')
            ->get()
            ->mapWithKeys(fn($r) => [$r->rating => $r->count]);

        $labels = range(1, 5);
        $data = collect($labels)->map(fn($rate) => $ratings[$rate] ?? 0);

        return [
            'datasets' => [
                [
                    'label' => 'Rating Count',
                    'data' => $data,
                    'backgroundColor' => '#34D399',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
