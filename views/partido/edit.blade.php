@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/partidos/{{$partido->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Pais</label>
    <input id="pais" name="pais" type="text" class="form-control" value="{{$partido->pais}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Goles</label>
    <input id="goles" name="goles" type="text" class="form-control" value="{{$partido->goles}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="text" class="form-control" value="{{$partido->fecha}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Estado</label>
    <input id="estado" name="estado" type="text" class="form-control" value="{{$partido->estado}}">
  </div>
  <a href="/partidos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection