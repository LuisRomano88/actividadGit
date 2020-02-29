@extends('plantilla')
@php
  $nombre_actor=null;
@endphp
@if ($_GET)
  @if (isset($_GET["buscar"]))
    @php
      $nombre_actor = $_GET["nombre_actor"];
    @endphp
  @endif
@endif

@section('titulo')
Lista de Actores
@endsection

@section('listadoActores')
  <form class="m-3" action="/actores/buscar/{{ isset($nombre_actor) ? $nombre_actor : ''}} " method="GET">
    {{-- {{csrf_field()}} --}}
    <label for="buscador">Buscador de Actores: </label>
    <input type="text" name="nombre_actor" value="{{ isset($nombre_actor) ? $nombre_actor : ''}}" placeholder="ingrese nombre ...">
    <button type="submit" name="buscar">Buscar</button>
  </form>
  <form class="limpiar" action="/actores/buscar/" method="GET">
    <button type="submit" name="">Limpiar</button>
  </form>

@if (isset($actores))
  <ul>
      <h1 class="mt-4">{{"Listado de Actores: "}}</h1>
      @forelse ($actores as $actor)
        {{-- <li>{{$actor["first_name"]}} {{$actor["last_name"]}}</li> --}}
        <li><a href="actor/{{$actor->id}}"> {{$actor->getNombreCompleto()}} </a></li>
        @unless ($actor->rating > 7)
          <p>{{"RECOMENDADO"}}</p>
        @endunless
      @empty
      {{"No hay actores!"}}
      @endforelse
  </ul>
  {{$actores->links()}}
@endif

@endsection
