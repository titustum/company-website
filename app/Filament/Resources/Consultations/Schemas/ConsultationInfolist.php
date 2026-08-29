<?php

namespace App\Filament\Resources\Consultations\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ConsultationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Attendee Details')
                    ->icon('heroicon-o-user')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        TextEntry::make('name'),
                        TextEntry::make('email')
                            ->label('Email address'),
                        TextEntry::make('phone'),
                        TextEntry::make('company')
                            ->placeholder('-'),

                    ]),
                Section::make('Request Details')
                    ->icon('heroicon-o-calendar-days')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        TextEntry::make('solution.title')
                            ->label('Solution'),
                        TextEntry::make('preferred_date')
                            ->date(),
                        TextEntry::make('preferred_slot'),
                        TextEntry::make('notes')
                            ->placeholder('-')
                            ->columnSpanFull(),

                    ]),
                Section::make('Status')
                    ->icon('heroicon-o-check-badge')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        TextEntry::make('status')
                            ->badge(),
                        TextEntry::make('reference')
                            ->placeholder('-'),
                        TextEntry::make('created_at')
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('updated_at')
                            ->dateTime()
                            ->placeholder('-'),

                    ]),
            ]);
    }
}
