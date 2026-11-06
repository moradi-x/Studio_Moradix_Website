<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->is('en') || $request->is('en/*')
            ? 'en'
            : 'fa';

        App::setLocale($locale);

        return $next($request);
    }
}