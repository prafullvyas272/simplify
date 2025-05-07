<?php

namespace App\Filament\Resources\WhiteListedUserResource\Pages;

use App\Filament\Resources\WhiteListedUserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWhiteListedUser extends CreateRecord
{
    protected static string $resource = WhiteListedUserResource::class;
}
