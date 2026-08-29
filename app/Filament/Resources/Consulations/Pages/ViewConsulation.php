<?php

namespace App\Filament\Resources\Consulations\Pages;

use App\Filament\Resources\Consulations\ConsulationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewConsulation extends ViewRecord
{
    protected static string $resource = ConsulationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
