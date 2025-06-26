<?php

namespace App\Http\Controllers\Web;
use App\Models\Information;

use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    public function index()
    {
        $informations = Information::latest()->paginate(6);
        return view('pages.informations.informations', compact('informations'));
    }

    public function show($slug)
    {
        $information = \App\Models\Information::where('slug', $slug)->firstOrFail();
        $relatedInformations = \App\Models\Information::where('id', '!=', $information->id)
            ->latest()
            ->take(3)
            ->get();

        return view('pages.informations.show', compact('information', 'relatedInformations'));
        
    }
}