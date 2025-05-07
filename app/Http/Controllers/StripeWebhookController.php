<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeWebhookController extends Controller
{

    public function invoiced_paid_successfully($payload) {
        // Handle successful payment event
    }

}
