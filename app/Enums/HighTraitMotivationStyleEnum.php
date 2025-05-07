<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum HighTraitMotivationStyleEnum:  string implements HasLabel
{

    case HighDominant="a";
    case HighInspiring="b";
    case HighSupportive="c";
    case HighCautious="d";

    public function getLabel(): ?string
    {
        return Str::headline($this->name);
    }
}
