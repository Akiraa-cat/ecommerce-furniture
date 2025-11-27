<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class VisitorChart extends ChartWidget
{    
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Visitors',
                    'data' => [ 190, 220, 240, 210, 230, 250, 280],
                    'backgroundColor' => [
                        'rgba(255, 159, 64, 0.25)',
                    ],
                    'borderColor' => 'rgb(255, 159, 64, 2)',
                    'borderWidth' => 2,
                ],
            ],
            'labels' => ['Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}