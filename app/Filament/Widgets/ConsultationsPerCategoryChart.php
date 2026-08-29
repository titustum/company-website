<?php

namespace App\Filament\Widgets;

use App\Models\Consultation;
use Filament\Widgets\ChartWidget;

class ConsultationsPerCategoryChart extends ChartWidget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 1;

    protected function getType(): string
    {
        return 'bar';
    }

    public function getHeading(): string
    {
        return 'Consultations per Category';
    }

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
}
