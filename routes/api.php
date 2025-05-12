<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrevoAPIController;
use App\Http\Middleware\WebhookAuthenticationMiddleware;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/send-data-to-brevo', [BrevoAPIController::class, 'sendSimplifyWhatsappSignupDataToBrevo'])->middleware(WebhookAuthenticationMiddleware::class);
