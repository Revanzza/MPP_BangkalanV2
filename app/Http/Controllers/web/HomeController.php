<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\OperationalHour;
use App\Models\Institution;
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

        // Ambil semua institusi untuk ditampilkan di home
        $institutions = Institution::all();



        // Ambil 6 informasi terbaru untuk ditampilkan di home, gunakan paginate agar bisa pakai ->links()
        $informations = \App\Models\Information::orderBy('created_at', 'desc')->paginate(6);

        // Ambil 3 agenda terbaru untuk ditampilkan di home, gunakan paginate agar bisa pakai ->links()
        $agendas = \App\Models\Agenda::orderBy('created_at', 'desc')->paginate(3);

        // Kirim ke view
        return view('pages.home', compact('hours', 'today', 'institutions', 'informations', 'agendas'));
    }
}
