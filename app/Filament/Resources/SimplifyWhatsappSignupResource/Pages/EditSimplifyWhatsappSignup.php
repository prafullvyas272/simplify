<?php

namespace App\Filament\Resources\SimplifyWhatsappSignupResource\Pages;

use App\Filament\Resources\SimplifyWhatsappSignupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSimplifyWhatsappSignup extends EditRecord
{
    protected static string $resource = SimplifyWhatsappSignupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
