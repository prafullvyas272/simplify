<?php

namespace App\Filament\Resources\AssessmentInviteResource\Pages;

use App\Filament\Resources\AssessmentInviteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssessmentInvite extends EditRecord
{
    protected static string $resource = AssessmentInviteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
