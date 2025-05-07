<?php

namespace App\Enums;

use App\Traits\EnumToArray;
use Filament\Support\Contracts\HasLabel;

enum PaymentTypeEnum: string implements HasLabel
{
    use EnumToArray;
    case Assessment="a";
    case DiscAssessment="d";
    case LearningAssessment="l";

    case Session="s";

    public function getLabel(): ?string
    {
        return $this->name;
    }
}
