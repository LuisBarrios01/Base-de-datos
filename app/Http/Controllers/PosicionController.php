<?php

namespace App\Http\Controllers;

use App\Models\Posicion;
use Illuminate\Http\Request;

class PosicionController extends Controller
{
    /**
 * Muestra una lista de las monedas.
 *
 * @return Response
 */
 public function index()
 {
   $posiciones = Posicion::get();
   return view('posiciones.index')->with('posiciones', $posiciones);
 }
 /**
* Muestra la moneda seleccionada por id.
* @param $IdCurrency 
* @return Response
*/
public function show($idposicion)
{
  // Devuelve la moneda seleccionada por id.
  $posicion = Posicion::find($idposicion);
  return view('calzados.show')->with('calzado',$posicion);
}
}
