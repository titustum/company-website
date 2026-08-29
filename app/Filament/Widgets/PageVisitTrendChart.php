<?php

namespace App\Filament\Widgets;

use App\Models\PageVisit;
use Filament\Widgets\ChartWidget;

class PageVisitTrendChart extends ChartWidget
{
    protected static ?int $sort = 3;

    protected int|string|array $columnSpan = 1;

    protected ?string $heading = 'Page Visit Trend';

    public function getDescription(): string
    {
        return 'Daily visits over the last 30 days';
    }

    protected function getData(): array
    {
        $days = 30;

        $visits = PageVisit::query()
            ->where('visited_at', '>=', now()->subDays($days - 1)->startOfDay())
            ->selectRaw('DATE(visited_at) AS day')
            ->selectRaw('COUNT(*) AS total')
            ->groupBy('day')
            ->orderBy('day')
            ->pluck('total', 'day');

        $labels = [];
        $data = [];

        for ($offset = $days - 1; $offset >= 0; $offset--) {
            $date = now()->subDays($offset);

            $labels[] = $date->format('M j');
            $data[] = $visits[$date->toDateString()] ?? 0;
        }

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Visits',
                    'data' => $data,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
