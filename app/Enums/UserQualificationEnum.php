<?php

namespace App\Enums;

use App\Traits\EnumToArray;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum UserQualificationEnum: string implements HasLabel
{
    use EnumToArray;

    case PostGrad="p";
    case Bachelor="b";
    case Masters="m";
//
    public function getLabel(): ?string
    {
        return Str::headline($this->name);
    }
}
