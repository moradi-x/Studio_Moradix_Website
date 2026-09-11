<?php

namespace App\Http\Middleware;

use App\Models\SiteVisit;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class TrackSiteVisit
{
    public function handle(
        Request $request,
        Closure $next
    ): Response {

        if (
            !$request->isMethod('GET') ||
            $request->ajax()
        ) {
            return $next($request);
        }

        $response = $next($request);

        if ($response->isSuccessful()) {

            $sessionId = $request->session()->getId();

            $sessionHash = hash(
                'sha256',
                $sessionId
            );

            SiteVisit::firstOrCreate([
                'visit_date' => now()->toDateString(),
                'session_hash' => $sessionHash,
            ]);
        }

        return $response;
    }
}