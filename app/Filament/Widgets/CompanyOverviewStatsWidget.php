<?php

namespace App\Filament\Widgets;

use App\Models\Consultation;
use App\Models\Industry;
use App\Models\Service;
use App\Models\Solution;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CompanyOverviewStatsWidget extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected int|string|array $columnSpan = 'full';

    protected function getColumns(): int
    {
        return 4;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Total Consultations', Consultation::count())
                ->description('Booking requests received')
                ->icon('heroicon-o-calendar-days')
                ->url(route('filament.admin.resources.consultations.index')),
            Stat::make('Total Solutions', Solution::count())
                ->description('Active solution offerings')
                ->icon('heroicon-o-light-bulb')
                ->url(route('filament.admin.resources.solutions.index')),
            Stat::make('Total Services', Service::count())
                ->description('Services offered')
                ->icon('heroicon-o-wrench-screwdriver')
                ->url(route('filament.admin.resources.services.index')),
            Stat::make('Total Industries', Industry::count())
                ->description('Industries served')
                ->icon('heroicon-o-building-office-2')
                ->url(route('filament.admin.resources.industries.index')),
        ];
    }
}
