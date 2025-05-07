<?php

namespace App\Http\Middleware;

use App\Models\UserAccess;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class CheckUserSimplifyRecords
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // return $next($request);
        // Check if the user is logged in
        $user = Auth::user();
        $userAccess = UserAccess::whereUserId($user['id'])->first();
        $simplifyStatus = $userAccess ? $userAccess->simplify : 0;

        if (!$user) {
            return redirect('/login'); // Redirect to login if not authenticated
        }

        if($simplifyStatus || $user->simplify_status == 1){
            return $next($request);
        }else{
            return redirect('/profile-report');
            // return $next($request);
        }
    }
}
