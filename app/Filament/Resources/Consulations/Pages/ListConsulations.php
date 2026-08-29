<?php

namespace App\Filament\Resources\Consulations\Pages;

use App\Filament\Resources\Consulations\ConsulationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListConsulations extends ListRecords
{
    protected static string $resource = ConsulationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
