<?php

namespace App\Filament\Resources\Consultations\Schemas;

use App\Enums\ConsultationStatus;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ConsultationForm
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
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required(),
                        TextInput::make('phone')
                            ->tel()
                            ->required(),
                        TextInput::make('company'),
                    ]),
                Section::make('Request Details')
                    ->icon('heroicon-o-calendar-days')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        Select::make('solution_id')
                            ->relationship('solution', 'title')
                            ->required(),
                        DatePicker::make('preferred_date')
                            ->required(),
                        TextInput::make('preferred_slot')
                            ->required(),
                        Textarea::make('notes')
                            ->columnSpanFull(),
                    ]),
                Section::make('Status')
                    ->icon('heroicon-o-check-badge')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        Select::make('status')
                            ->options(ConsultationStatus::class)
                            ->default('pending')
                            ->required(),
                        TextInput::make('reference'),
                    ]),
            ]);
    }
}
