<?php

namespace App\Http\Controllers;

use App\Models\Antrean;
use Illuminate\Http\Request;

class AntreanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'institution_id' => 'required|exists:institutions,id',
            'id_service' => 'required|exists:services,id',
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'no_telp' => 'required|string|max:20',
        ]);

        // Generate nomor antrean otomatis (misal: urutan antrean pada layanan hari ini)
        $count = Antrean::where('id_service', $request->id_service)
            ->whereDate('created_at', now()->toDateString())
            ->count();
        $nomer_antrean = str_pad($count + 1, 3, '0', STR_PAD_LEFT);

        $antrean = Antrean::create([
            'id_service' => $request->id_service,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'nomer_antrean' => $nomer_antrean,
        ]);

        // Redirect atau tampilkan konfirmasi
        return redirect()->back()->with('success', 'Nomor antrean Anda: ' . $nomer_antrean);
    }
}
