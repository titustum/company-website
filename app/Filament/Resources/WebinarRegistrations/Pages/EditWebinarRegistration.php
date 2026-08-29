<?php

namespace App\Filament\Resources\WebinarRegistrations\Pages;

use App\Filament\Resources\WebinarRegistrations\WebinarRegistrationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditWebinarRegistration extends EditRecord
{
    protected static string $resource = WebinarRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
