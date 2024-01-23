<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role === 0) {
            if (Auth::user()->status === 1) {
                // User is banned
                return abort(403, 'Bạn đã bị banned');
            }
            // User is an admin and not banned, allow access
            return $next($request);
        }
        // Ngăn truy cập nếu không có quyền
        return abort(403, 'Bạn không đủ thẩm quyền');
    }
}
