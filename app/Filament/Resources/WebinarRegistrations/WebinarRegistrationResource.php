<?php

namespace App\Filament\Resources\WebinarRegistrations;

use App\Filament\Resources\WebinarRegistrations\Pages\CreateWebinarRegistration;
use App\Filament\Resources\WebinarRegistrations\Pages\EditWebinarRegistration;
use App\Filament\Resources\WebinarRegistrations\Pages\ListWebinarRegistrations;
use App\Filament\Resources\WebinarRegistrations\Pages\ViewWebinarRegistration;
use App\Filament\Resources\WebinarRegistrations\Schemas\WebinarRegistrationForm;
use App\Filament\Resources\WebinarRegistrations\Schemas\WebinarRegistrationInfolist;
use App\Filament\Resources\WebinarRegistrations\Tables\WebinarRegistrationsTable;
use App\Models\WebinarRegistration;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WebinarRegistrationResource extends Resource
{
    protected static ?string $model = WebinarRegistration::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTicket;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return WebinarRegistrationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return WebinarRegistrationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WebinarRegistrationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWebinarRegistrations::route('/'),
            'create' => CreateWebinarRegistration::route('/create'),
            'view' => ViewWebinarRegistration::route('/{record}'),
            'edit' => EditWebinarRegistration::route('/{record}/edit'),
        ];
    }
}
