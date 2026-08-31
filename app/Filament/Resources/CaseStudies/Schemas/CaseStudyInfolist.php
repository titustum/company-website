<?php

namespace App\Filament\Resources\CaseStudies\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CaseStudyInfolist
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

                        TextEntry::make('slug'),
                        TextEntry::make('title'),
                        TextEntry::make('subtitle')
                            ->placeholder('-'),
                        TextEntry::make('client_name'),
                        TextEntry::make('client_logo')
                            ->placeholder('-'),
                        TextEntry::make('industry')
                            ->placeholder('-'),
                        TextEntry::make('category')
                            ->placeholder('-'),
                        TextEntry::make('service')
                            ->placeholder('-'),
                        TextEntry::make('short_description')
                            ->columnSpanFull(),

                    ]),
                Section::make('Story')
                    ->icon('heroicon-o-book-open')
                    ->columnSpanFull()
                    ->schema([

                        TextEntry::make('description')
                            ->html()
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('challenge')
                            ->html()
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('approach')
                            ->html()
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('solution')
                            ->html()
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('implementation')
                            ->html()
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('outcome')
                            ->html()
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('objectives')
                            ->listWithLineBreaks()
                            ->columnSpanFull(),
                        TextEntry::make('key_challenges')
                            ->listWithLineBreaks()
                            ->columnSpanFull(),
                        TextEntry::make('services')
                            ->badge()
                            ->columnSpanFull(),
                        TextEntry::make('technologies')
                            ->badge()
                            ->columnSpanFull(),
                        TextEntry::make('results')
                            ->listWithLineBreaks()
                            ->columnSpanFull(),
                        TextEntry::make('highlights')
                            ->badge()
                            ->columnSpanFull(),

                    ]),
                Section::make('Testimonial')
                    ->icon('heroicon-o-chat-bubble-left-right')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        TextEntry::make('testimonial')
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('testimonial_author')
                            ->placeholder('-'),
                        TextEntry::make('testimonial_role')
                            ->placeholder('-'),

                    ]),
                Section::make('Media & SEO')
                    ->icon('heroicon-o-photo')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        ImageEntry::make('hero_image')
                            ->placeholder('-')
                             ->disk('public'),
                        TextEntry::make('images')
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('meta_title')
                            ->placeholder('-'),
                        TextEntry::make('meta_description')
                            ->placeholder('-')
                            ->columnSpanFull(),

                    ]),
                Section::make('Publishing')
                    ->icon('heroicon-o-globe-alt')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        IconEntry::make('is_published')
                            ->boolean(),
                        IconEntry::make('is_featured')
                            ->boolean(),
                        TextEntry::make('sort_order')
                            ->numeric(),
                        TextEntry::make('published_at')
                            ->dateTime()
                            ->placeholder('-'),
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
