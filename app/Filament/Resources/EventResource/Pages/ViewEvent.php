<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Enums\RescheduleReason;
use App\Filament\Resources\EventResource;
use App\Http\Controllers\RescheduleOrderController;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Resources\Pages\ViewRecord;

class ViewEvent extends ViewRecord
{
    protected static string $resource = EventResource::class;

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
