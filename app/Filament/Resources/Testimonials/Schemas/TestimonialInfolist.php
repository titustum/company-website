<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TestimonialInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('client_name'),
                TextEntry::make('client_role')
                    ->placeholder('-'),
                TextEntry::make('organization'),
                TextEntry::make('organization_logo')
                    ->placeholder('-'),
                TextEntry::make('client_photo')
                    ->placeholder('-'),
                TextEntry::make('quote')
                    ->columnSpanFull(),
                TextEntry::make('service')
                    ->placeholder('-'),
                TextEntry::make('industry')
                    ->placeholder('-'),
                IconEntry::make('is_featured')
                    ->boolean(),
                IconEntry::make('is_published')
                    ->boolean(),
                TextEntry::make('sort_order')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
