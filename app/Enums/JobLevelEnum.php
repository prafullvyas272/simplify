<?php

namespace App\Enums;

use App\Traits\EnumToArray;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum JobLevelEnum:string implements HasLabel
{
    use EnumToArray;

    case EntryLevel="e";
    case Junior="j";
    case MidLevel="m";
    case Senior="s";
    case Executive="x";


    public function getLabel(): ?string
    {
        return Str::headline($this->name);
    }
}
