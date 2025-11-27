<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Products', '1,234')
                ->description('All time products')
                ->descriptionIcon('heroicon-m-archive-box')
                ->color('primary')
                ->chart([7, 2, 10, 3, 15, 4, 17]),

            Stat::make('Total Categories', '42')
                ->description('Product categories')
                ->descriptionIcon('heroicon-m-tag')
                ->color('primary'),

            Stat::make('Total Sales', 'Rp 12.5M')
                ->description('32% increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('primary'),

            Stat::make('Active Users', '892')
                ->description('Registered users')
                ->descriptionIcon('heroicon-m-users')
                ->color('primary'),
        ];
    }
}