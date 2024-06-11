<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequestResponse
{
    public function handle($request, Closure $next)
    {
        // Log request details
        Log::info('Request', [
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'headers' => $request->header(),
            'body' => $request->all()
        ]);

        // Handle the request
        $response = $next($request);

        // Log response details
        Log::info('Response', [
            'status_code' => $response->status(),
            'headers' => $response->headers->all(),
            'body' => $response->getContent()
        ]);

        return $response;
    }
}