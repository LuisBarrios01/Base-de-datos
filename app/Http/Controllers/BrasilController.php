<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrasilController extends Controller
{
    public function index()
    {
        return view('paises.brasil');
    }
}
