<?php

namespace App\Filament\Resources\AssessmentInviteResource\Pages;

use App\Filament\Resources\AssessmentInviteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssessmentInvites extends ListRecords
{
    protected static string $resource = AssessmentInviteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Send New Invitation'),
        ];
    }


}
