<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('layouts.temp_pages.about');
    }

    public function MissionandVision()
    {
        return view('layouts.temp_pages.missionandvision');
    }
    
    public function Team()
    {
        return view('layouts.temp_pages.team');
    }
   
    public function Partner()
    {
        return view('layouts.temp_pages.partner');
    }
}
