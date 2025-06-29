<?php

namespace App\Http\Controllers;

use App\Models\Antrean;
use App\Models\Service;
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
            'no_hp' => 'required|string|max:20',
            'tanggal' => 'required|date',
        ]);


        // Ambil institution_id dari service jika tidak dikirim dari form
        $service = Service::find($request->id_service);
        $institution_id = $service ? $service->id_institution : $request->institution_id;

        // Ambil nomor antrean terakhir untuk institusi & tanggal yang sama, lalu tambah 1
        $lastAntrean = Antrean::where('institution_id', $institution_id)
            ->where('tanggal', $request->tanggal)
            ->orderByDesc('nomer_antrean')
            ->first();

        if ($lastAntrean) {
            // Ambil 3 digit terakhir dari nomer_antrean
            $lastNumber = (int)substr($lastAntrean->nomer_antrean, -3);
            $nextNumber = $lastNumber + 1;
        } else {
            $nextNumber = 1;
        }
        $nomer_antrean = $institution_id . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

        $antrean = Antrean::create([
            'id_service' => $request->id_service,
            'institution_id' => $institution_id,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
            'tanggal' => $request->tanggal,
            'nomer_antrean' => $nomer_antrean,
            'status' => 'menunggu',
        ]);

        // Redirect ke halaman sukses
        return redirect()->route('antrean.sukses')->with('nomor', $nomer_antrean);
    }
    public function sukses(Request $request)
    {
        $nomor = session('nomor');
        // Cari antrean yang statusnya sedang dipanggil (dipanggil/berlangsung) untuk layanan yang sama hari ini
        $sedang_dilayani = Antrean::where('status', 'dipanggil')
            ->whereDate('created_at', now()->toDateString())
            ->orderBy('created_at', 'asc')
            ->first();
        return view('antrean.sukses', compact('nomor', 'sedang_dilayani'));
    }
}
