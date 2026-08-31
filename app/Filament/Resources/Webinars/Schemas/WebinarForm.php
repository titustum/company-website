<?php

namespace App\Filament\Resources\Webinars\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class WebinarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Overview')
                    ->icon('heroicon-o-video-camera')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('slug')
                            ->required(),
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('subtitle'),
                        FileUpload::make('image')
                            ->image()
                             ->disk('public')
                            ->directory('webinars'),
                        Textarea::make('short_description')
                            ->columnSpanFull(),
                        RichEditor::make('description')
                            ->columnSpanFull(),
                    ]),
                Section::make('Schedule & Meeting')
                    ->icon('heroicon-o-calendar-days')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        DateTimePicker::make('starts_at')
                            ->required(),
                        DateTimePicker::make('ends_at'),
                        TextInput::make('timezone')
                            ->required()
                            ->default('Africa/Nairobi'),
                        TextInput::make('registration_url')
                            ->url(),
                        TextInput::make('join_url')
                            ->url(),
                        TextInput::make('platform'),
                        TextInput::make('meeting_id'),
                    ]),
                Section::make('Speaker')
                    ->icon('heroicon-o-user')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('speaker_name'),
                        TextInput::make('speaker_role'),
                        TextInput::make('speaker_photo'),
                    ]),
                Section::make('Content & SEO')
                    ->icon('heroicon-o-document-text')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        Textarea::make('topics')
                            ->columnSpanFull(),
                        Textarea::make('faqs')
                            ->columnSpanFull(),
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
                    ]),
            ]);
    }
}
