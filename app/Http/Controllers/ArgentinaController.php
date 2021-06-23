<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArgentinaController extends Controller
{
    public function index()
    {
        return view('paises.argentina');
    }
}
