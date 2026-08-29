<?php

namespace App\Filament\Resources\Webinars\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class WebinarInfolist
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

                        TextEntry::make('slug'),
                        TextEntry::make('title'),
                        TextEntry::make('subtitle')
                            ->placeholder('-'),
                        ImageEntry::make('image')
                            ->placeholder('-'),
                        TextEntry::make('short_description')
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('description')
                            ->html()
                            ->placeholder('-')
                            ->columnSpanFull(),

                    ]),
                Section::make('Schedule & Meeting')
                    ->icon('heroicon-o-calendar-days')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        TextEntry::make('starts_at')
                            ->dateTime(),
                        TextEntry::make('ends_at')
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('timezone'),
                        TextEntry::make('registration_url')
                            ->placeholder('-'),
                        TextEntry::make('join_url')
                            ->placeholder('-'),
                        TextEntry::make('platform')
                            ->placeholder('-'),
                        TextEntry::make('meeting_id')
                            ->placeholder('-'),

                    ]),
                Section::make('Speaker')
                    ->icon('heroicon-o-user')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        TextEntry::make('speaker_name')
                            ->placeholder('-'),
                        TextEntry::make('speaker_role')
                            ->placeholder('-'),
                        TextEntry::make('speaker_photo')
                            ->placeholder('-'),

                    ]),
                Section::make('Content & SEO')
                    ->icon('heroicon-o-document-text')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        TextEntry::make('topics')
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('faqs')
                            ->placeholder('-')
                            ->columnSpanFull(),
                        IconEntry::make('is_published')
                            ->boolean(),
                        IconEntry::make('is_featured')
                            ->boolean(),
                        TextEntry::make('sort_order')
                            ->numeric(),
                        TextEntry::make('meta_title')
                            ->placeholder('-'),
                        TextEntry::make('meta_description')
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('created_at')
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('updated_at')
                            ->dateTime()
                            ->placeholder('-'),

                    ]),
            ]);
    }
}
