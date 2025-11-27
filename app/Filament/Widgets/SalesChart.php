<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
// use App\Models\Order;
// use Flowframe\Trend\Trend;
// use Flowframe\Trend\TrendValue;

class SalesChart extends ChartWidget
{    
    protected static ?int $sort = 2;

    // Gunakan method getHeading() untuk heading dinamis
    public function getHeading(): ?string
    {
        return 'Sales Overview';
    }

    protected function getData(): array
    {
        // STATIS
        return [
            'datasets' => [
                [
                    'label' => 'Sales',
                    'data' => [0, 10, 5, 15, 20, 25, 30, 28, 35, 40, 45, 50],
                    'backgroundColor' => 'rgba(255, 159, 64, 0.2)',
                    'borderColor' => 'rgba(255, 159, 64, 0.5)',
                    'fill' => true,
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}