<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Child;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\UserReport;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $user = Auth::user();

        if ((bool) $user['is_invited_from_lesson_planner']) {
            return redirect()->route('profile.showWelcomeUserPage');
        }

        if (!isset($user->data['profile_completed']) || !$user->data['profile_completed']) {
            Auth::logout();
            return Inertia::render('Auth/Login', [
                // 'canResetPassword' => Route::has('password.request'),
                'error_message' => 'Looks like ! Credentials are not authorised',
            ]);
        }

        $request->session()->regenerate();
        // $children = Child::whereUserId($user->id)->first();
        $children = Child::where('user_id', $user->id)->latest()->first();
        $isPaymentPendingForAnyChild = Child::whereUserId($user->id)->wherePaymentStatus(null)->first();

        if (!$isPaymentPendingForAnyChild && $children) {
            $userReport = UserReport::whereChildId($children['id'])->first();

            if (!$userReport) {
                return redirect()->route('thanks.you', ['id' => $children['id']]);
            }
        }

        if ((bool) $user['is_invited_from_lesson_planner']) {
            return redirect()->route('profile.showWelcomeUserPage');
        } else {
            return redirect()->intended(route('profile.report', absolute: false));
        }

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
