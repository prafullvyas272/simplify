<?php

namespace App\Filament\Resources\CoachUserResource\Pages;

use App\Filament\Resources\CoachUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoachUsers extends ListRecords
{
    protected static string $resource = CoachUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
