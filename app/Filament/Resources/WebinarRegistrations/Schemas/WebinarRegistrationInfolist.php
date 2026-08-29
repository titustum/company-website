<?php

namespace App\Filament\Resources\WebinarRegistrations\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class WebinarRegistrationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Registration Details')
                    ->icon('heroicon-o-ticket')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        TextEntry::make('webinar.title')
                            ->label('Webinar'),
                        TextEntry::make('name'),
                        TextEntry::make('email')
                            ->label('Email address'),
                        TextEntry::make('phone')
                            ->placeholder('-'),
                        TextEntry::make('organization')
                            ->placeholder('-'),
                        TextEntry::make('job_title')
                            ->placeholder('-'),
                        TextEntry::make('message')
                            ->placeholder('-')
                            ->columnSpanFull(),

                    ]),
                Section::make('Attendance')
                    ->icon('heroicon-o-clipboard-document-check')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        TextEntry::make('registered_at')
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('attended_at')
                            ->dateTime()
                            ->placeholder('-'),
                        IconEntry::make('reminder_sent')
                            ->boolean(),
                        IconEntry::make('is_confirmed')
                            ->boolean(),
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
