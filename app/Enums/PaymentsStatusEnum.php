<?php

namespace App\Enums;

use App\Traits\EnumToArray;
use Filament\Support\Contracts\HasLabel;

enum PaymentsStatusEnum : string implements HasLabel
{

    use EnumToArray;

    case Failed ="f";
    case Pending ="p";
    case Successful ="s";


    public function getLabel(): ?string
    {
        return $this->name;
    }
}
