<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partido;   // esta linea es importante

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $partidos = Partido::all();
        return view('partido.index')->with('partidos',$partidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('partido.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $partidos = new Partido();
        $partidos->codigo= $request->get('codigo');
        $partidos->pais= $request->get('pais');
        $partidos->goles = $request->get('goles');
        $partidos->fecha= $request->get('fecha');
        $partidos->estado = $request->get('estado');
        $partidos->save();

        return redirect('/partidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $partidos = Partido::find($id);
        return view('partido.edit')->with('partido',$partidos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $partidos = Partido::find($id);
        $partidos->codigo = $request->get('codigo');
        $partidos->pais = $request->get('pais');
        $partidos->goles= $request->get('goles');
        $partidos->fecha = $request->get('fecha');
        $partidos->estado = $request->get('estado ');
        $partidos->save();

        return redirect('/partidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $partidos = Partido::find($id);        
        $partidos->delete();

        return redirect('/partidos');
    }
}