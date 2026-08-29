<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ConsultationsBookingPerCategoryBarChart extends ChartWidget
{
    protected ?string $heading = 'Consultations Booking Per Category Bar Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
