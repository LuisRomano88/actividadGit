@extends('plantilla')

@section('titulo')
  Detalle pelicula
@endsection
@section('detallePelicula')

  @php
  $flag=false;
  @endphp
  @if (!is_numeric($id))
    {{"El id no es valido"}}
    @php
    $flag=true;
    @endphp
  @else
    @foreach ($arrayPeliculas as $pelicula)
      @if ($pelicula["id"] == $id)
        <h1>{{ "Nombre: " . $pelicula["nombre"] . " - Rating: " . $pelicula["rating"] }}</h1>
        @php
        $flag=true;
        break;
        @endphp
      @endif
    @endforeach
  @endif
  @if (!$flag)
    {{"No se encontró ninguna película"}}
  @endif

@endsection
