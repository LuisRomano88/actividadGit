@extends('plantilla')
@section('titulo')
  Listado Peliculas
@endsection
@section('listadoPeliculas')
  <h1>Listado de Peliculas: </h1>
    <ul>
      @forelse ($peliculas as $pelicula)
        <li>{{ $pelicula["title"] . "-" . $pelicula["rating"]}}
        @if ($pelicula["rating"] > 8)
          {{" - RECOMENDADA"}}
        @endif </li>
      @empty
        {{ "No hay peliculas" }}
      @endforelse
    </ul>
    {{$peliculas->links()}}
@endsection
