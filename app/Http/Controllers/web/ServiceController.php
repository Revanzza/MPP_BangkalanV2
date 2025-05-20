<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.services.index');
    }
    public function show($id)
    {
        return view('pages.services.show');
    }
}