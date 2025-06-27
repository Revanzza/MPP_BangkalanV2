<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $institutions = Institution::all();
        return view('pages.services.services', compact('institutions'));
    }

    // Halaman detail instansi (daftar layanan milik instansi)
    public function instansi($slug)
    {
        $instansi = Institution::where('slug', $slug)->firstOrFail();
        $layanans = $instansi->services; // relasi di model Institution
        return view('pages.services.instansi', compact('instansi', 'layanans'));
    }

    // Halaman detail layanan (persyaratan & mekanisme)
    public function show($id)
    {
        $layanan = Service::with(['persyaratan', 'mekanisme'])->findOrFail($id);
        return view('pages.services.show', compact('layanan'));
    }
}