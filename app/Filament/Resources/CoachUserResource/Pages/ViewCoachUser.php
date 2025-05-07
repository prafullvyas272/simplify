<?php

namespace App\Filament\Resources\CoachUserResource\Pages;

use App\Filament\Resources\CoachUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCoachUser extends ViewRecord
{
    protected static string $resource = CoachUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
