<?php

namespace App\Filament\Resources\Webinars\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class WebinarForm
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
                Textarea::make('short_description')
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->columnSpanFull(),
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
                TextInput::make('speaker_name'),
                TextInput::make('speaker_role'),
                TextInput::make('speaker_photo'),
                FileUpload::make('image')
                    ->image(),
                Textarea::make('topics')
                    ->columnSpanFull(),
                Textarea::make('faqs')
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
            ]);
    }
}
