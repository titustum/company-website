<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TeamMemberInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Team Member Details')
                    ->icon('heroicon-o-identification')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        TextEntry::make('name'),
                        TextEntry::make('role'),
                        ImageEntry::make('photo')
                            ->placeholder('-')
                            ->disk('public'),
                        IconEntry::make('is_published')
                            ->boolean(),
                        TextEntry::make('sort_order')
                            ->numeric(),
                        TextEntry::make('bio')
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
