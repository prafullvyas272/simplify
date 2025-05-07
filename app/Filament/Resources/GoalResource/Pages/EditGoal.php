<?php

namespace App\Filament\Resources\GoalResource\Pages;

use App\Filament\Resources\GoalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGoal extends EditRecord
{
    protected static string $resource = GoalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
