@extends('plantilla')

@section('actorsEdit')
    <form class="" action="/actor/{{$actor->id}}" method="post">

      @csrf
      {{-- {{ method_field('PUT') }} --}}
      <input type="hidden" name="_method" value="PUT">
      <div class="">
        <label for="first_name"> First name:</label>
        <input type="text" name="first_name" value="{{$actor->first_name}}">
      </div>
      <div class="">
        <label for="last_name"> Last name:</label>
        <input type="text" name="last_name" value="{{$actor->last_name}}">
      </div>
      <div class="">
        <label for="rating"> Rating:</label>
        <input type="text" name="rating" value="{{$actor->rating}}">
      </div>
      <div class="">
        <label for="favorite_movie_id"> Favorite movie:</label>
        <input type="text" name="favorite_movie_id" value="{{$actor->favorite_movie_id}}">
      </div>
      {{-- <div class="">
        <label for="poster"> Poster:</label>
        <input type="file" name="poster" value="">
      </div> --}}
      <div class="">
        <input type="submit" name="editar_actor" value="Editar Actor">
      </div>
    </form>
@endsection
