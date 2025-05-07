<?php

namespace App\Enums;

use App\Traits\EnumToArray;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum StatusEnum:string implements HasLabel
{
    use EnumToArray;

    case Requested="r";

    case PaidSuccessfully="s";
    case PaymentFailed="f";
    case Accepted="a";

    case Declined="d";
    case Completed="c";

    public function getLabel(): ?string
    {
        return Str::headline($this->name);
    }
}
