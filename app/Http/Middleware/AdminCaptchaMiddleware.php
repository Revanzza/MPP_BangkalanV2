<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AdminCaptchaMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user sudah verifikasi captcha
        if (!Session::get('admin_captcha_verified')) {
            return redirect()->route('admin.gateway');
        }

        return $next($request);
    }
}
