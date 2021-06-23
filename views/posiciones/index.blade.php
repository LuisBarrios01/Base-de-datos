@extends('app')
@section('content')
<h1 class="text-primary">Posiciones</h1>
 
<table class="table table-bordered" id="tableVentas">
  <thead>
    <tr>
        <th class="text-center" style="background-color: #76D7C4;">Codigo</th>
        <th class="text-center" style="background-color: #76D7C4;">Pais</th>
        <th class="text-center" style="background-color: #76D7C4;">Puntos</th>
        <th class="text-center" style="background-color: #76D7C4;">PJ</th>
        <th class="text-center" style="background-color: #76D7C4;">G</th>
        <th class="text-center" style="background-color: #76D7C4;">E</th>
        <th class="text-center" style="background-color: #76D7C4;">P</th>
        <th class="text-center" style="background-color: #76D7C4;">DG</th>
        <th class="text-center" style="background-color: #76D7C4;">Resultado</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posiciones as $posicion)
        <tr>
        <td class="text-center" style="background-color: #CCD1D1;">{{ $posicion->idposicion}}</td>
            <td class="text-center"  style="background-color: #CCD1D1;">{{ $posicion->pais}}</td>
            <td class="text-center"  style="background-color: #CCD1D1;">{{ $posicion->puntos }}</td>
            <td class="text-center"  style="background-color: #CCD1D1;">{{ $posicion->PJ}}</td>
            <td class="text-center"  style="background-color: #CCD1D1;">{{ $posicion->G}}</td>
            <td class="text-center"  style="background-color: #CCD1D1;">{{ $posicion->E}}</td>
            <td class="text-center"  style="background-color: #CCD1D1;">{{ $posicion->P}}</td>
            <td class="text-center"  style="background-color: #CCD1D1;">{{ $posicion->DG}}</td>
            <td class="text-center"  style="background-color: #CCD1D1;">{{ $posicion->Resultado}}</td>
        </tr>
    @endforeach
  </tbody>
</table>
<img src="https://cdn.forbes.com.mx/2018/04/Rusia-2018-Portada.jpg" width="80%" height="20%" style="padding-left: 200px;">
@stop