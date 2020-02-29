@extends('plantilla')
@section('detalleActor')
  <h2>El actor seleccionado es: {{$actor->getNombreCompleto()}}</h2>
  <form class="" action="/actor/{id}" method="post">
    @csrf
    {{method_field('DELETE')}}
    <input type="hidden" name="id_actor" value="{{$actor->id}}">
    <input type="submit" name="eliminar_actor" value="Eliminar Actor">
  </form>
@endsection
