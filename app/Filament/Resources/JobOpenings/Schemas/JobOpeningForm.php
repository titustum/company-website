<?php

namespace App\Filament\Resources\JobOpenings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class JobOpeningForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('department')
                    ->required(),
                TextInput::make('employment_type')
                    ->required()
                    ->default('Full-time'),
                TextInput::make('location'),
                TextInput::make('work_arrangement'),
                Textarea::make('summary')
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Textarea::make('responsibilities')
                    ->columnSpanFull(),
                Textarea::make('requirements')
                    ->columnSpanFull(),
                Textarea::make('qualifications')
                    ->columnSpanFull(),
                Textarea::make('benefits')
                    ->columnSpanFull(),
                TextInput::make('application_email')
                    ->email(),
                TextInput::make('application_url')
                    ->url(),
                DatePicker::make('application_deadline'),
                Toggle::make('is_published')
                    ->required(),
                Toggle::make('is_featured')
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('meta_title'),
                Textarea::make('meta_description')
                    ->columnSpanFull(),
            ]);
    }
}
