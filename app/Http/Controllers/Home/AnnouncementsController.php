<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    public function Announcements()
    {
        return view('layouts.temp_pages.announcement');
    }
}
