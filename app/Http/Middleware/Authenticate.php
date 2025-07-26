<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (! $request->expectsJson()) {
            // Detecta si viene de una ruta que contiene /v1 o /v2
            if ($request->is('v1/*')) {
                return '/v1/login';
            }

            if ($request->is('v2/*')) {
                return '/v2/login';
            }

            // Ruta por defecto
            return '/login';
        }

        return null;
    }
}
