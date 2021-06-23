<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeruController extends Controller
{
    public function index()
    {
        return view('paises.peru');
    }
}
