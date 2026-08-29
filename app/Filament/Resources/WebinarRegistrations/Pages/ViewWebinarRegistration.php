<?php

namespace App\Filament\Resources\WebinarRegistrations\Pages;

use App\Filament\Resources\WebinarRegistrations\WebinarRegistrationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewWebinarRegistration extends ViewRecord
{
    protected static string $resource = WebinarRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
