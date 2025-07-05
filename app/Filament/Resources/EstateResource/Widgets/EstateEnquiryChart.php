<?php

namespace App\Filament\Resources\EstateResource\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\EstateEnquiry;

class EstateEnquiryChart extends ChartWidget
{
    protected static ?string $heading = 'Estate Enquiries by Month';

    protected function getData(): array
    {
        $data = EstateEnquiry::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
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
                    'label' => 'Enquiries',
                    'data' => $counts,
                    'backgroundColor' => '#10B981',
                ],
            ],
            'labels' => $months->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
