<?php

namespace App\Filament\Resources\Industries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class IndustryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Overview')
                    ->icon('heroicon-o-building-office-2')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('slug')
                            ->required(),
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('subtitle'),
                        TextInput::make('icon'),
                        FileUpload::make('hero_image')
                            ->image(),
                        Textarea::make('short_description')
                            ->columnSpanFull(),
                        RichEditor::make('description')
                            ->columnSpanFull(),
                    ]),
                Section::make('Content')
                    ->icon('heroicon-o-document-text')
                    ->columnSpanFull()
                    ->schema([
                        Textarea::make('challenges')
                            ->columnSpanFull(),
                        Textarea::make('solutions')
                            ->columnSpanFull(),
                        Textarea::make('benefits')
                            ->columnSpanFull(),
                        Textarea::make('faqs')
                            ->columnSpanFull(),
                    ]),
                Section::make('Publishing & SEO')
                    ->icon('heroicon-o-globe-alt')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        Toggle::make('is_published')
                            ->required(),
                        TextInput::make('sort_order')
                            ->required()
                            ->numeric()
                            ->default(0),
                        TextInput::make('meta_title'),
                        Textarea::make('meta_description')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
