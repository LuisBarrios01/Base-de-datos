<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcuadorController extends Controller
{
    public function index()
    {
        return view('paises.ecuador');
    }
}
