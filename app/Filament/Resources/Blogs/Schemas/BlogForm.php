<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Content')
                    ->icon('heroicon-o-document-text')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('slug')
                            ->required(),
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('excerpt'),
                        TextInput::make('category'),
                        Textarea::make('tags')
                            ->columnSpanFull(),
                        RichEditor::make('content')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Author & Images')
                    ->icon('heroicon-o-user')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('author'),
                        TextInput::make('author_role'),
                        FileUpload::make('author_image')
                            ->image(),
                        FileUpload::make('featured_image')
                            ->image(),
                    ]),
                Section::make('Publishing & SEO')
                    ->icon('heroicon-o-globe-alt')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        Toggle::make('is_featured')
                            ->required(),
                        Toggle::make('is_published')
                            ->required(),
                        DateTimePicker::make('published_at'),
                        TextInput::make('views')
                            ->required()
                            ->numeric()
                            ->default(0),
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
