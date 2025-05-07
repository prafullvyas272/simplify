<?php

namespace App\Filament\Resources\GaolResource\Pages;

use App\Filament\Resources\GaolResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGaol extends EditRecord
{
    protected static string $resource = GaolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
