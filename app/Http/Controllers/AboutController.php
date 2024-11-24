<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first(); // Assuming there's only one About Us content
        return view('about', compact('about'));
    }
}
