<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class RequestIdMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $requestId = (string) Str::uuid();
        $request->attributes->set('request_id', $requestId);

        Log::withContext([
            'request_id' => $requestId,
            'admin_id' => $request->user('admin')?->getKey(),
            'ip' => $request->ip(),
            'method' => $request->method(),
            'url' => $request->path(),
        ]);

        try {
            $response = $next($request);

            $response->headers->set('X-Request-ID', $requestId);

            return $response;
        } finally {
            Log::withoutContext();
        }
    }
}
