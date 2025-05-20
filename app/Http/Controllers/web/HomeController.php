<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\OperationalHour;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil jam operasional dari database, urut berdasarkan hari dalam seminggu
        $hours = OperationalHour::orderByRaw("
            FIELD(day, 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu')
        ")->get();

        // Ambil hari ini dalam format lokal Indonesia (misalnya: "Senin")
        $today = Carbon::now()->locale('id')->isoFormat('dddd');

        // Kirim ke view
        return view('pages.home', compact('hours', 'today'));
    }
}
