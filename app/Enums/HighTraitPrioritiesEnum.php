<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum HighTraitPrioritiesEnum: string implements HasLabel
{
    case yourPriorityIsPowerToActSoYouDecideInOrderToSolveProblemsBecauseYouFocusOnTheGoal="a";
    case yourPriorityIsPeopleInvolvementSoYouInteractInOrderToPersuadeOthersBecauseYouFocusOnThePopular="b";
    case yourPriorityIsPredictabilitySoYouSeekStabilityInOrderToKeepStatusQuoBecauseYouFocusOnTheAccepted="c";
    case yourPriorityIsProcedureSoYouSeekFactsInOrderToUpholdPrinciplesBecauseYouFocusOnTheRules="d";

    public function getLabel(): ?string
    {
        return Str::headline($this->name);
    }
}
