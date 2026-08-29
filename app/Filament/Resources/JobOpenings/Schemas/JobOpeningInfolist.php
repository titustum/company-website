<?php

namespace App\Filament\Resources\JobOpenings\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class JobOpeningInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Job Details')
                    ->icon('heroicon-o-briefcase')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        TextEntry::make('title'),
                        TextEntry::make('slug'),
                        TextEntry::make('department'),
                        TextEntry::make('employment_type'),
                        TextEntry::make('location')
                            ->placeholder('-'),
                        TextEntry::make('work_arrangement')
                            ->placeholder('-'),

                    ]),
                Section::make('Description')
                    ->icon('heroicon-o-document-text')
                    ->columnSpanFull()
                    ->schema([

                        TextEntry::make('summary')
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('description')
                            ->html()
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('responsibilities')
                            ->listWithLineBreaks()
                            ->columnSpanFull(),
                        TextEntry::make('requirements')
                            ->listWithLineBreaks()
                            ->columnSpanFull(),
                        TextEntry::make('qualifications')
                            ->listWithLineBreaks()
                            ->columnSpanFull(),
                        TextEntry::make('benefits')
                            ->listWithLineBreaks()
                            ->columnSpanFull(),

                    ]),
                Section::make('Application')
                    ->icon('heroicon-o-paper-airplane')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([

                        TextEntry::make('application_email')
                            ->placeholder('-'),
                        TextEntry::make('application_url')
                            ->placeholder('-'),
                        TextEntry::make('application_deadline')
                            ->date()
                            ->placeholder('-'),

                    ]),
                Section::make('Publishing & SEO')
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
