<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum LowTraitMotivationStyleEnum: string implements HasLabel
{
    case LowDominant="a";
    case LowInspiring="b";
    case LowSupportive="c";
    case LowCautious="d";

    public function getLabel(): ?string
    {
        return Str::headline($this->name);
    }
}
