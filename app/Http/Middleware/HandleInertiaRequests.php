<?php

namespace App\Http\Middleware;

use App\Enums\ProposalStatusEnum;
use App\Enums\StatusEnum;
use App\Models\CoachUser;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Inertia\Middleware;
use Tighten\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $proposals=null;
        $sessions=null;


        if (Auth::user()?->role_id==2){
            $proposals=Proposal::where('status' , ProposalStatusEnum::Requested)
                ->where('coach_id', Auth::id())
                ->with("student:id,first_name,last_name")
                ->get();

            $sessions=CoachUser::where('status' , StatusEnum::Requested)
                ->where('coach_id', Auth::id())
                ->with("student:id,first_name,last_name")
                ->get();
        }


        return [
            ...parent::share($request),
            'auth' => [
                'user' => $request->user(),
            ],
            'proposals' => $proposals,
            'sessions' => $sessions,
            'csrf_token'=>csrf_token(),
            'ziggy' => fn () => [
                ...(new Ziggy)->toArray(),
                'location' => $request->url(),
            ],
            'flash' => [
                'success' => fn () => Session::get("success"),
                'error' => fn () => Session::get("error"),
                'info' => fn () => Session::get("info"),
                'warning' => fn () => Session::get("warning"),
            ],
        ];
    }
}
