<?php

namespace App\Enums;

use App\Traits\EnumToArray;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum GenderEnum : string implements HasLabel
{
    use EnumToArray;

    case Male="male";
    case Female="female";
    case IdRatherNotToSay="not_to_say";
    case Other="other";


    public function getLabel(): ?string
    {
        return Str::headline($this->name);
    }
}
