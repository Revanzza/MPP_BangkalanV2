<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AdminCaptchaController extends Controller
{
    public function showForm()
    {
        return view('admin.captcha-gateway', [
            'siteKey' => env('RECAPTCHA_SITE_KEY'),
        ]);
    }

    public function verify(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required',
        ]);

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        if ($response->json('success')) {
            Session::put('admin_captcha_verified', true);
            Session::put('admin_captcha_verified_at', now());

            return redirect()->route('filament.admin.pages.dashboard');
        }

        return back()->withErrors(['captcha' => 'Captcha failed']);
    }
}
