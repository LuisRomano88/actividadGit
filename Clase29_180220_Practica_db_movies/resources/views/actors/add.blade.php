@extends('plantilla')

@section('actoresAdd')
  <form class="" action="/actors/add" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="">
      <label for="first_name"> First name:</label>
      <input type="text" name="first_name" value="{{old('first_name')}}">
    </div>
    <div class="">
      <label for="last_name"> Last name:</label>
      <input type="text" name="last_name" value="{{old('last_name')}}">
    </div>
    <div class="">
      <label for="rating"> Rating:</label>
      <input type="text" name="rating" value="{{old('rating')}}">
    </div>
    <div class="">
      <label for="favorite_movie_id"> Favorite movie:</label>
      <input type="text" name="favorite_movie_id" value="{{old('favorite_movie_id')}}">
    </div>
    {{-- <div class="">
      <label for="poster"> Poster:</label>
      <input type="file" name="poster" value="">
    </div> --}}
    <div class="">
      <input type="submit" name="cargar_actor" value="Cargar Actor">
    </div>
  </form>
@endsection
