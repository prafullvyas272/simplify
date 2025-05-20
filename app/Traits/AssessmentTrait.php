<?php

namespace App\Traits;

use App\Models\AssessmentInvite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
USE App\Enums\AssessmentStatus;

trait AssessmentTrait
{
    /**
     * Method to update the status of completed assessment by term
     */
    public function updateAssessmentStatusByTerm(Request $request, $childId)
    {
        $authUser = Auth::user();
        $assessmentInvite = $authUser->assessmentInvites->first();

        if (!$assessmentInvite) {
            return;
        } else {
            return $assessmentInvite->update([
                'second_term_assessment_status' => AssessmentStatus::COMPLETED,
            ]);
        }
    }
}
