<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function about() {
        return view('about');
    }

    public function experiences() {
        return view('experiences');
    }

    public function projects() {
        return view('projects');
    }

    public function contact() {
        return view('contact');
    }
}
