<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckByRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = auth()->user();

        if (!$user) {
            abort(403, 'Anda tidak punya akses untuk halaman ini');
        }
        

       $roles = array_map('trim', $roles);

        if (!is_array($roles)) {
            $roles = explode(',', $roles);
        }

        if (!in_array($user->role, $roles)) {
            abort(403, 'Anda tidak punya akses untuk halaman ini');
        }

        return $next($request);
    }
}