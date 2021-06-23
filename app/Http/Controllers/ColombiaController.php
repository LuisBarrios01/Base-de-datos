<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColombiaController extends Controller
{
    public function index()
    {
        return view('paises.colombia');
    }
}
