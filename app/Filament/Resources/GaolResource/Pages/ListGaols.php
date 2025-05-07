<?php

namespace App\Filament\Resources\GaolResource\Pages;

use App\Filament\Resources\GaolResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGaols extends ListRecords
{
    protected static string $resource = GaolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
