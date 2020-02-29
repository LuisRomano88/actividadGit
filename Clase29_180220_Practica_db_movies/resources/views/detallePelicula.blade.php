@extends('plantilla')

@section('titulo')
  Detalle pelicula
@endsection
@section('detallePelicula')
        <h1>Usted eligió la película: {{ "Nombre: " . $pelicula->title . " - Rating: " . $pelicula->rating }}</h1>
        <form class="" action="/borrarPelicula" method="post">
          {{csrf_field()}}
          <input type="hidden" name="id" value="{{$pelicula->id}}">
          <input type="submit" name="" value="Borrar Pelicula">
        </form>
@endsection
