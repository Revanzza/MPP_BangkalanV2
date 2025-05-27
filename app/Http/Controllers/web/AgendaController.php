<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index()
    {
        return view('pages.agenda.agenda');
    }

    public function show(Agenda $agenda)
    {
        return view('pages.agenda.show', compact('agenda'));
    }
}