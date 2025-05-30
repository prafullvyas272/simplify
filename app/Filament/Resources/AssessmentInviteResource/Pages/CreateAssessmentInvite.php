<?php

namespace App\Filament\Resources\AssessmentInviteResource\Pages;

use App\Filament\Resources\AssessmentInviteResource;
use App\Http\Controllers\BrevoAPIController;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateAssessmentInvite extends CreateRecord
{
    protected static string $resource = AssessmentInviteResource::class;

    // Change the form submit button text
    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction()->label('Send Invite'),
        ];
    }

    public function getHeading(): string
    {
        return 'Send New Assessment Invite';
    }


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['invited_by'] = Auth::id(); // Automatically assign current user's ID
        return $data;
    }

    protected function afterCreate(): void
    {
        $brevo = app(BrevoAPIController::class);
        $brevo->sendNewTermAssessmentLink($this->record->user_id);
    }

}
