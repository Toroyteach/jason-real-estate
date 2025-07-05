<?php

namespace App\Filament\Resources\EstateResource\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Estate;

class EstateTypesChart extends ChartWidget
{
    protected static ?string $heading = 'Estate Type Distribution';

    protected function getData(): array
    {
        $types = ['development', 'buy', 'rent_residential', 'rent_commercial'];

        $data = collect($types)->mapWithKeys(function ($type) {
            return [$type => Estate::where('type', $type)->count()];
        });

        return [
            'datasets' => [
                [
                    'data' => $data->values(),
                    'backgroundColor' => ['#3B82F6', '#10B981', '#F59E0B', '#EF4444'],
                ],
            ],
            'labels' => $data->keys()->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
