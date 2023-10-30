<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index()
    {
        return view('Client/home');
    }

    public function birth_cert()
    {
        return view('Client/birth-cert');
    }

    public function passport()
    {
        return view('Client/passport');
    }

    public function details()
    {
        return view('Client/form');
    }
}
