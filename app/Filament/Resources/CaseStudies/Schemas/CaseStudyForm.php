<?php

namespace App\Filament\Resources\CaseStudies\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CaseStudyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Overview')
                    ->icon('heroicon-o-folder')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
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
                    ]),
                Section::make('Story')
                    ->icon('heroicon-o-book-open')
                    ->columnSpanFull()
                    ->schema([
                        RichEditor::make('description')
                            ->columnSpanFull(),
                        RichEditor::make('challenge')
                            ->columnSpanFull(),
                        RichEditor::make('approach')
                            ->columnSpanFull(),
                        RichEditor::make('solution')
                            ->columnSpanFull(),
                        RichEditor::make('implementation')
                            ->columnSpanFull(),
                        RichEditor::make('outcome')
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
                    ]),
                Section::make('Testimonial')
                    ->icon('heroicon-o-chat-bubble-left-right')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        Textarea::make('testimonial')
                            ->columnSpanFull(),
                        TextInput::make('testimonial_author'),
                        TextInput::make('testimonial_role'),
                    ]),
                Section::make('Media & SEO')
                    ->icon('heroicon-o-photo')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        FileUpload::make('hero_image')
                            ->image()
                            ->disk('public')
                            ->directory('case-studies'),
                        Textarea::make('images')
                            ->columnSpanFull(),
                        TextInput::make('meta_title'),
                        Textarea::make('meta_description')
                            ->columnSpanFull(),
                    ]),
                Section::make('Publishing')
                    ->icon('heroicon-o-globe-alt')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        Toggle::make('is_published')
                            ->required(),
                        Toggle::make('is_featured')
                            ->required(),
                        TextInput::make('sort_order')
                            ->required()
                            ->numeric()
                            ->default(0),
                        DateTimePicker::make('published_at'),
                    ]),
            ]);
    }
}
