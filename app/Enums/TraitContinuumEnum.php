<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum TraitContinuumEnum: string implements  HasLabel
{
    case VeryHighDominant="a";
    case VeryHighInspiring="b";
    case VeryHighSupportive="c";
    case VeryHighCautious="d";

    case HighDominant="e";
    case HighInspiring="f";
    case HighSupportive="g";
    case HighCautious="h";

    case AverageDominant="i";
    case AverageInspiring="j";
    case AverageSupportive="k";
    case AverageCautious="l";

    case LowDominant="m";
    case LowInspiring="n";
    case LowSupportive="o";
    case LowCautious="p";

    case VeryLowDominant="q";
    case VeryLowInspiring="r";
    case VeryLowSupportive="s";
    case VeryLowCautious="t";

    public function getLabel(): ?string
    {
        return Str::headline($this->name);
    }
}
