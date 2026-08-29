<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Testimonial Details')
                    ->icon('heroicon-o-chat-bubble-left-right')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('client_name')
                            ->required(),
                        TextInput::make('client_role'),
                        TextInput::make('organization')
                            ->required(),
                        TextInput::make('organization_logo'),
                        TextInput::make('client_photo'),
                        TextInput::make('service'),
                        TextInput::make('industry'),
                        Textarea::make('quote')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Publishing')
                    ->icon('heroicon-o-globe-alt')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        Toggle::make('is_featured')
                            ->required(),
                        Toggle::make('is_published')
                            ->required(),
                        TextInput::make('sort_order')
                            ->required()
                            ->numeric()
                            ->default(0),
                    ]),
            ]);
    }
}
