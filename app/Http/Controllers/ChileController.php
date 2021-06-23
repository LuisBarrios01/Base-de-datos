<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChileController extends Controller
{
    public function index()
    {
        return view('paises.chile');
    }
}
