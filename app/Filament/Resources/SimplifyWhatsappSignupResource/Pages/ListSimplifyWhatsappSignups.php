<?php

namespace App\Filament\Resources\SimplifyWhatsappSignupResource\Pages;

use App\Filament\Resources\SimplifyWhatsappSignupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSimplifyWhatsappSignups extends ListRecords
{
    protected static string $resource = SimplifyWhatsappSignupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
