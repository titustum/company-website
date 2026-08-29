<?php

namespace App\Filament\Resources\Consultations\Schemas;

use App\Enums\ConsultationStatus;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ConsultationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('solution_id')
                    ->relationship('solution', 'title')
                    ->required(),
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
                DatePicker::make('preferred_date')
                    ->required(),
                TextInput::make('preferred_slot')
                    ->required(),
                Textarea::make('notes')
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(ConsultationStatus::class)
                    ->default('pending')
                    ->required(),
                TextInput::make('reference'),
            ]);
    }
}
