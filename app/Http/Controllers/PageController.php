<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function help()
    {
        return view('pages.help');
    }

    public function team()
    {
        return view('pages.team');
    }
}