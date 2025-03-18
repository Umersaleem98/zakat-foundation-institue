<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function GraduateCertificate()
    {
        return view('layouts.temp_pages.gaduatecertificate');
    }
    
    public function MasterofArts()
    {
        return view('layouts.temp_pages.masterofzrts');
    }
    
    public function PHD()
    {
        return view('layouts.temp_pages.phd');
    }


}
