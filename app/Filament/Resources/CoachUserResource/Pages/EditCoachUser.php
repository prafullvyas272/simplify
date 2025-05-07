<?php

namespace App\Filament\Resources\CoachUserResource\Pages;

use App\Filament\Resources\CoachUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCoachUser extends EditRecord
{
    protected static string $resource = CoachUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
