<?php

namespace App\Filament\Resources\CaseStudies\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CaseStudyInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
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
                TextEntry::make('description')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('challenge')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('approach')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('solution')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('implementation')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('outcome')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('objectives')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('key_challenges')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('services')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('technologies')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('results')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('highlights')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('testimonial')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('testimonial_author')
                    ->placeholder('-'),
                TextEntry::make('testimonial_role')
                    ->placeholder('-'),
                ImageEntry::make('hero_image')
                    ->placeholder('-'),
                TextEntry::make('images')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('meta_title')
                    ->placeholder('-'),
                TextEntry::make('meta_description')
                    ->placeholder('-')
                    ->columnSpanFull(),
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
            ]);
    }
}
