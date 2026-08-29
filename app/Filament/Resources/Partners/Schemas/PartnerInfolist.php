<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PartnerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Partner Details')
                    ->icon('heroicon-o-globe-americas')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        TextEntry::make('name'),
                        ImageEntry::make('image'),
                        TextEntry::make('sort_order')
                            ->numeric(),
                        IconEntry::make('is_published')
                            ->boolean(),
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
