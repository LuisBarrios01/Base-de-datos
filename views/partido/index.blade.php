@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="partidos/create" class="btn btn-success">CREAR</a>


<table class="table table-info table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Codigo</th>
      <th scope="col">Paises</th>
      <th scope="col">Goles</th>
      <th scope="col">Fecha</th>
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($partidos as $partido)
    <tr>
        <td>{{$partido->id}}</td>
        <td>{{$partido->codigo}}</td>
        <td>{{$partido->pais}}</td>
        <td>{{$partido->goles}}</td>
        <td>{{$partido->fecha}}</td>
        <td>{{$partido->estado}}</td>
        <td>
         <form action="{{ route('partidos.destroy',$partido->id) }}" method="POST">
          <a href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=qatar&table=partidos&pos=0" class="btn btn-primary">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Eliminar</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
  <a href="/home" class="btn btn-primary">Volver</a>
</table>

@endsection