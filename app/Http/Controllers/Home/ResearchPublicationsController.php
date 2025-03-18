<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResearchPublicationsController extends Controller
{
    public function ResearchPublication()
    {
        return view('layouts.temp_pages.researchpublication');
    }
}
