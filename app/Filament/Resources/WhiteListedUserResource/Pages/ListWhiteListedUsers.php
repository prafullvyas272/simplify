<?php

namespace App\Filament\Resources\WhiteListedUserResource\Pages;

use App\Filament\Resources\WhiteListedUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhiteListedUsers extends ListRecords
{
    protected static string $resource = WhiteListedUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
