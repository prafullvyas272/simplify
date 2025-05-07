<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum ProposalStatusEnum: string implements  HasLabel
{

    case Requested="r";
    case Accepted="a";
    case Declined="d";

    public function getLabel(): ?string
    {
        return Str::headline($this->name);
    }
}
