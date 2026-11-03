<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> 9bd941d (Commit Setup CeLOE LMS)
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
<<<<<<< HEAD
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (! $request->user() || $request->user()->role !== $role) {
            abort(403, 'Akses tidak diizinkan. Halaman ini khusus ' . $role . '.');
=======
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!Auth::check() || !in_array(Auth::user()->role, $roles, true)) {
            $required = implode(', ', array_map('ucfirst', $roles));
            abort(403, "Akses ditolak. Halaman atau aksi ini hanya dapat diakses oleh peran: {$required}.");
>>>>>>> 9bd941d (Commit Setup CeLOE LMS)
        }

        return $next($request);
    }
}
