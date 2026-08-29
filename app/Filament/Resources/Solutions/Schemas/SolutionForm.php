<?php

namespace App\Filament\Resources\Solutions\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SolutionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Overview')
                    ->icon('heroicon-o-light-bulb')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('slug')
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
                        Repeater::make('features')
                            ->label('Features')
                            ->default([])
                            ->grid(2)
                            ->collapsible()
                            ->collapsed()
                            ->cloneable()
                            ->reorderable()
                            ->addActionLabel('Add a feature')
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                            ->schema([
                                TextInput::make('title')
                                    ->required(),
                                TextInput::make('icon')
                                    ->placeholder('ionicons name, e.g. shield-check-outline'),
                                Textarea::make('description')
                                    ->rows(3)
                                    ->columnSpanFull(),
                            ])
                            ->columnSpanFull(),
                        Repeater::make('benefits')
                            ->label('Benefits')
                            ->default([])
                            ->grid(2)
                            ->collapsible()
                            ->collapsed()
                            ->cloneable()
                            ->reorderable()
                            ->addActionLabel('Add a benefit')
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                            ->schema([
                                TextInput::make('title')
                                    ->required(),
                                TextInput::make('icon')
                                    ->placeholder('ionicons name, e.g. check-outline'),
                                Textarea::make('description')
                                    ->rows(3)
                                    ->columnSpanFull(),
                            ])
                            ->columnSpanFull(),
                        Repeater::make('faqs')
                            ->label('FAQs')
                            ->default([])
                            ->collapsible()
                            ->collapsed()
                            ->cloneable()
                            ->reorderable()
                            ->addActionLabel('Add a question')
                            ->itemLabel(fn (array $state): ?string => $state['question'] ?? null)
                            ->schema([
                                TextInput::make('question')
                                    ->required(),
                                Textarea::make('answer')
                                    ->rows(3)
                                    ->columnSpanFull(),
                            ])
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
