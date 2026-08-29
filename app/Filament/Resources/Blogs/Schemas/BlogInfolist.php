<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BlogInfolist
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

                        TextEntry::make('slug'),
                        TextEntry::make('title'),
                        TextEntry::make('excerpt')
                            ->placeholder('-'),
                        TextEntry::make('category')
                            ->placeholder('-'),
                        TextEntry::make('tags')
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('content')
                            ->html()
                            ->columnSpanFull(),

                    ]),
                Section::make('Author & Images')
                    ->icon('heroicon-o-user')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        TextEntry::make('author')
                            ->placeholder('-'),
                        TextEntry::make('author_role')
                            ->placeholder('-'),
                        ImageEntry::make('author_image')
                            ->placeholder('-'),
                        ImageEntry::make('featured_image')
                            ->placeholder('-'),

                    ]),
                Section::make('Publishing & SEO')
                    ->icon('heroicon-o-globe-alt')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        IconEntry::make('is_featured')
                            ->boolean(),
                        IconEntry::make('is_published')
                            ->boolean(),
                        TextEntry::make('published_at')
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('views')
                            ->numeric(),
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
