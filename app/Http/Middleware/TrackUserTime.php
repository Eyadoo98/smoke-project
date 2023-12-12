<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class TrackUserTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userKey = 'timer_' . auth()->user()->id;

        // Check if the user has a timer in the session
        if (!Session::has($userKey)) {
            // Set the start time if not already set
            Session::put($userKey, now());
        }
        // Store the start time in the request
        $request->attributes->add(['startTime' => Session::get($userKey)]);

        return $next($request);
    }
}
