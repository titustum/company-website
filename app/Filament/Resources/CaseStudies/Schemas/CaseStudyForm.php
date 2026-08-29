<?php

namespace App\Filament\Resources\CaseStudies\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CaseStudyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('subtitle'),
                TextInput::make('client_name')
                    ->required(),
                TextInput::make('client_logo'),
                TextInput::make('industry'),
                TextInput::make('category'),
                TextInput::make('service'),
                Textarea::make('short_description')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Textarea::make('challenge')
                    ->columnSpanFull(),
                Textarea::make('approach')
                    ->columnSpanFull(),
                Textarea::make('solution')
                    ->columnSpanFull(),
                Textarea::make('implementation')
                    ->columnSpanFull(),
                Textarea::make('outcome')
                    ->columnSpanFull(),
                Textarea::make('objectives')
                    ->columnSpanFull(),
                Textarea::make('key_challenges')
                    ->columnSpanFull(),
                Textarea::make('services')
                    ->columnSpanFull(),
                Textarea::make('technologies')
                    ->columnSpanFull(),
                Textarea::make('results')
                    ->columnSpanFull(),
                Textarea::make('highlights')
                    ->columnSpanFull(),
                Textarea::make('testimonial')
                    ->columnSpanFull(),
                TextInput::make('testimonial_author'),
                TextInput::make('testimonial_role'),
                FileUpload::make('hero_image')
                    ->image(),
                Textarea::make('images')
                    ->columnSpanFull(),
                TextInput::make('meta_title'),
                Textarea::make('meta_description')
                    ->columnSpanFull(),
                Toggle::make('is_published')
                    ->required(),
                Toggle::make('is_featured')
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                DateTimePicker::make('published_at'),
            ]);
    }
}
