<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // You can fetch any data required for the homepage here
        return view('home');
    }
}

