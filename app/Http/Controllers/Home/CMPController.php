<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CMPController extends Controller
{
    public function ProfessionalDevelopment()
    {
        return view('layouts.temp_pages.professionaldevelopment');
    }
}
