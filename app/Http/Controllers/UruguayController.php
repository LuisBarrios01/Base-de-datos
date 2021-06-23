<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UruguayController extends Controller
{
    public function index()
    {
        return view('paises.uruguay');
    }
}
