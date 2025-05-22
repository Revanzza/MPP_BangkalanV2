<?php

use App\Models\OperationalHour;
use Carbon\Carbon;

class OperationalHoursController extends Controller
{
    public function showOperationalHours()
    {
        $hours = OperationalHour::orderByRaw("
            FIELD(day, 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu')
        ")->get();

        $today = Carbon::now()->locale('id')->isoFormat('dddd'); // e.g., "Senin"

        return view('components.operational-hours', compact('hours', 'today'));
    }
}
