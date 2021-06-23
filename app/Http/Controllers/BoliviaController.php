<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoliviaController extends Controller
{
    public function index()
    {
        return view('paises.bolivia');
    }
}
