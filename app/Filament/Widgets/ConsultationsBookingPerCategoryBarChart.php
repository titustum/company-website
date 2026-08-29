<?php

namespace App\Filament\Widgets;

use App\Models\Consultation;
use Filament\Widgets\ChartWidget;

class ConsultationsBookingPerCategoryBarChart extends ChartWidget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 1;

    protected ?string $heading = 'Consultations Booking Per Category';

    public function getDescription(): string
    {
        return 'Booking requests grouped by solution category';
    }

    protected function getData(): array
    {
        $totals = Consultation::query()
            ->leftJoin('solutions', 'solutions.id', '=', 'consultations.solution_id')
            ->selectRaw('COALESCE(solutions.title, ?) AS label', ['Uncategorized'])
            ->selectRaw('COUNT(*) AS total')
            ->groupBy('label')
            ->orderByDesc('total')
            ->pluck('total', 'label');

        return [
            'labels' => $totals->keys()->all(),
            'datasets' => [
                [
                    'label' => 'Consultations',
                    'data' => $totals->values()->all(),
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
