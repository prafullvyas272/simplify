<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum LowTraitPrioritiesEnum: string implements HasLabel
{
    case yourPriorityIsYieldingToPowerSoYouParticipateInOrderToBeATeamPlayerBecauseYouFocusOnTheTeam="a";
    case yourPriorityIsLessPeopleInvolvementSoYouIsolateInOrderToBeSelfPersuadedBecauseYouFocusOnTheLogic="b";
    case yourPriorityIsNotPredictabilitySoYouAreSpontaneousInOrderToPromoteChangeBecauseYouFocusOnTheInnovation="c";
    case ourPriorityIsNotProcedureSoYouExploreFeelingsInOrderToBeExpressiveBecauseYouFocusOnYourFeelings="d";

    public function getLabel(): ?string
    {
        return Str::headline($this->name);

    }
}
