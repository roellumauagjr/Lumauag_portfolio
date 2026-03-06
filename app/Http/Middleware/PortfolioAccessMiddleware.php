<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class PortfolioAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Log the access attempt
        Log::info('Portfolio access attempt:', [
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'user_agent' => $request->userAgent(),
        ]);

        // Example condition: Add a custom header to the response
        $response = $next($request);
        $response->headers->set('X-Portfolio-Mode', 'MVC-Bootstrap');

        return $response;
    }
}
