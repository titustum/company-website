<?php

namespace App\Filament\Resources\Consulations;

use App\Filament\Resources\Consulations\Pages\CreateConsulation;
use App\Filament\Resources\Consulations\Pages\EditConsulation;
use App\Filament\Resources\Consulations\Pages\ListConsulations;
use App\Filament\Resources\Consulations\Pages\ViewConsulation;
use App\Filament\Resources\Consulations\Schemas\ConsulationForm;
use App\Filament\Resources\Consulations\Schemas\ConsulationInfolist;
use App\Filament\Resources\Consulations\Tables\ConsulationsTable;
use App\Models\Consulation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConsulationResource extends Resource
{
    protected static ?string $model = Consulation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ConsulationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ConsulationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ConsulationsTable::configure($table);
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
            'index' => ListConsulations::route('/'),
            'create' => CreateConsulation::route('/create'),
            'view' => ViewConsulation::route('/{record}'),
            'edit' => EditConsulation::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
