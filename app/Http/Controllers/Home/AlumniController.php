<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function Alumni()
    {
        return view('layouts.temp_pages.alumnii');
    }
}
