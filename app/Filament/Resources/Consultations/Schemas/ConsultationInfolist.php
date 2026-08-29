<?php

namespace App\Filament\Resources\Consultations\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ConsultationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('solution.title')
                    ->label('Solution'),
                TextEntry::make('name'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('phone'),
                TextEntry::make('company')
                    ->placeholder('-'),
                TextEntry::make('preferred_date')
                    ->date(),
                TextEntry::make('preferred_slot'),
                TextEntry::make('notes')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('reference')
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
