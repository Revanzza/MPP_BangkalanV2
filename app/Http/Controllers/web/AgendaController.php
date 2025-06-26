<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index()
    {

        $agendas = Agenda::latest()->paginate(5); // 5 per halaman
        return view('pages.agenda.agenda', compact('agendas'));
    }

    public function show($slug)
    {
        $agenda = Agenda::where('slug', $slug)->firstOrFail();
        return view('pages.agenda.show', compact('agenda'));
    }
}