<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WebhookAuthenticationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->header('X-Webhook-Token') !== config('app.webhook_secret_token')) {
            return response()->json([
                'message' => 'Unauthorized webhook access. Please provide the correct token in header.',
            ], 403);
        }

        return $next($request);
    }
}
