<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum StressPotentialLevelEnum:string implements HasLabel
{
    case VeryHigh="a";
    case High="h";
    case Medium="m";
    case Low="l";
    case VeryLow="z";

    public function getLabel(): ?string
    {
        return Str::headline($this->name);
    }
}
