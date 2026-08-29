<?php

namespace App\Filament\Resources\WebinarRegistrations\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class WebinarRegistrationForm
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
                        Select::make('webinar_id')
                            ->relationship('webinar', 'title')
                            ->required(),
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required(),
                        TextInput::make('phone')
                            ->tel(),
                        TextInput::make('organization'),
                        TextInput::make('job_title'),
                        Textarea::make('message')
                            ->columnSpanFull(),
                    ]),
                Section::make('Attendance')
                    ->icon('heroicon-o-clipboard-document-check')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        DateTimePicker::make('registered_at'),
                        DateTimePicker::make('attended_at'),
                        Toggle::make('reminder_sent')
                            ->required(),
                        Toggle::make('is_confirmed')
                            ->required(),
                    ]),
            ]);
    }
}
