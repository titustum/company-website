<?php

namespace App\Filament\Widgets;

use App\Enums\ConsultationStatus;
use App\Models\Consultation;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestBookedConsultationsTable extends TableWidget
{
    protected static ?int $sort = 4;

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Latest Bookings')
            ->query(fn (): Builder => Consultation::query()->with('solution')->latest())
            ->columns([
                TextColumn::make('reference')
                    ->badge()
                    ->searchable(),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('solution.title')
                    ->label('Category')
                    ->searchable(),
                TextColumn::make('preferred_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (ConsultationStatus $state): string => match ($state) {
                        ConsultationStatus::Confirmed => 'success',
                        ConsultationStatus::Pending => 'warning',
                        ConsultationStatus::Completed => 'info',
                        ConsultationStatus::Cancelled => 'danger',
                    }),
            ])
            ->defaultPaginationPageOption(10)
            ->paginated([10, 25, 50]);
    }
}
