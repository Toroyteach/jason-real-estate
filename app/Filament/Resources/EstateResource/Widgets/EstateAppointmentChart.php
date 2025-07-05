<?php

namespace App\Filament\Resources\EstateResource\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\EstateAppointment;

class EstateAppointmentChart extends ChartWidget
{
    protected static ?string $heading = 'Estate Appointments per Month';

    protected function getData(): array
    {
        $data = EstateAppointment::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $months = collect(range(1, 12))->map(fn($m) => now()->setMonth($m)->format('M'));

        $counts = $months->map(fn($name, $i) =>
            optional($data->firstWhere('month', $i + 1))->count ?? 0
        );

        return [
            'datasets' => [
                [
                    'label' => 'Appointments',
                    'data' => $counts,
                    'backgroundColor' => '#F97316',
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
