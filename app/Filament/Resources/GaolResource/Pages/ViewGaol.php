<?php

namespace App\Filament\Resources\GaolResource\Pages;

use App\Filament\Resources\GaolResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGaol extends ViewRecord
{
    protected static string $resource = GaolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
