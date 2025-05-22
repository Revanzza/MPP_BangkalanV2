<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function index()
    {
        return view('pages.agenda.agenda');
    }

    public function show($id)
    {
        return view('pages.agenda.show');
    }
}