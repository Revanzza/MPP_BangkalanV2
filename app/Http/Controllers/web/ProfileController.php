<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function visionMission()
    {
        return view('pages.profiles.vision-mission.vision-mission');
    }
    public function facilities()
    {
        return view('pages.profiles.fasilities.fasilities');
    }
    public function legalBasis()
    {
        return view('pages.profiles.legal-basis.legal-basis');
    }
}