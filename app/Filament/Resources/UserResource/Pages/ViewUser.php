<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Enums\RescheduleReason;
use App\Filament\Resources\UserResource;
use App\Http\Controllers\RescheduleOrderController;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Resources\Pages\ViewRecord;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Action::make('Assessment')
                ->action(function ($data, $record){

                    redirect()->route('filament.admin.resources.assessments.view', [$this->record->assessments()->first()]);

                }),

        ];
    }
}
