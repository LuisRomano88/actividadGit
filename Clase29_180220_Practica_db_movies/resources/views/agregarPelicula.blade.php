@extends('plantilla')

@section('agregarPelicula')

<form class="" action="/agregarPelicula" method="post">
  {{csrf_field()}}
  <div class="">
    <label for="title">Título: </label>
    <input type="text" name="title" value="">
  </div>
  <div class="">
    <label for="rating">Rating: </label>
    <input type="text" name="rating" value="">
  </div>
  <div class="">
    <label for="awards">Awards: </label>
    <input type="text" name="awards" value="">
  </div>
  <div class="">
    <label for="release_date">Fecha de estreno: </label>
    <input type="date" name="release_date" value="">
  </div>
  <div class="">
    <input type="submit" name="" value="Agregar Pelicula">
  </div>
</form>

@endsection
