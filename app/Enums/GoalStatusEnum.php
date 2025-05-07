<?php

namespace App\Enums;

use App\Traits\EnumToArray;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum GoalStatusEnum :string implements  HasLabel
{

    use EnumToArray;

    case Completed ="c";
    case InProgress ="i";
    case Upcoming ="u";


    public function getLabel(): ?string
    {
        return Str::headline($this->name);
    }
}
