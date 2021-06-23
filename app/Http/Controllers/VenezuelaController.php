<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenezuelaController extends Controller
{
    public function index()
    {
        return view('paises.venezuela');
    }
}
