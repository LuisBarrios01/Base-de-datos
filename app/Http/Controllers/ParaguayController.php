<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParaguayController extends Controller
{
    public function index()
    {
        return view('paises.paraguay');
    }
}
