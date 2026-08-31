<?php

namespace App\Filament\Resources\Industries\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class IndustryInfolist
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

                        TextEntry::make('slug'),
                        TextEntry::make('title'),
                        TextEntry::make('subtitle')
                            ->placeholder('-'),
                        TextEntry::make('icon')
                            ->placeholder('-'),
                        ImageEntry::make('hero_image')
                            ->placeholder('-')
                             ->disk('public'),
                        TextEntry::make('short_description')
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('description')
                            ->html()
                            ->placeholder('-')
                            ->columnSpanFull(),

                    ]),
                Section::make('Content')
                    ->icon('heroicon-o-document-text')
                    ->columnSpanFull()
                    ->schema([

                        TextEntry::make('challenges')
                            ->listWithLineBreaks()
                            ->columnSpanFull(),
                        TextEntry::make('solutions')
                            ->badge()
                            ->columnSpanFull(),
                        TextEntry::make('benefits')
                            ->listWithLineBreaks()
                            ->columnSpanFull(),
                        RepeatableEntry::make('faqs')
                            ->schema([
                                TextEntry::make('question'),
                                TextEntry::make('answer'),
                            ])
                            ->columnSpanFull(),

                    ]),
                Section::make('Publishing & SEO')
                    ->icon('heroicon-o-globe-alt')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        IconEntry::make('is_published')
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
