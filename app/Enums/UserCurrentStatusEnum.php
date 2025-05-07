<?php

namespace App\Enums;

use App\Traits\EnumToArray;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum UserCurrentStatusEnum:string implements HasLabel
{
    use  EnumToArray;
    case  Working="w";
    case  Studying="s";

    case LookingForWork="l";

    case None="n";
    public function getLabel(): ?string
    {
        return Str::title($this->name) ;
    }
}
