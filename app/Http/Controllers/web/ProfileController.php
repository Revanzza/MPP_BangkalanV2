<?php

namespace App\Http\Controllers\Web;
use App\Models\Leader;
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
    public function tugasfungsi()
    {
        return view('pages.profiles.tugas-fungsi.tugas-fungsi');
    }
    public function prestasiinovasi()
    {
        return view('pages.profiles.prestasi-inovasi.prestasi-inovasi');
    }
    public function leadership()
    {
        $leader = Leader::where('is_head', true)->first();
        return view('pages.profiles.leadership.leadership', compact('leader'));
    }
}