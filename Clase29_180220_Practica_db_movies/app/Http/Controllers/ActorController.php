<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class ActorController extends Controller
{
    public function directory(){
      $actores = Actor::orderBy("first_name")->paginate(5);
      return view("actores", compact("actores"));
    }

    public function show($id){
      $actor = Actor::find($id);
      return view("actor", compact("actor"));
    }

    public function search(Request $req){
      $actores = Actor::where("first_name", "LIKE", "%".$req['nombre_actor']."%")
      ->orderBy('first_name')
      ->paginate(5);
      // dd($actores);
      return view("actores", compact("actores"));
    }

    public function store(Request $form){
      $reglas = [
        "first_name"=>"required",
        "last_name"=>"required",
        "rating"=>"required",
        "favorite_movie_id"=>"required"
      ];
      $mensajes = [
        "required"=>"El campo :attribute es obligatorio."
      ];

      $this->validate($form, $reglas, $mensajes);

      $nuevoActor = new Actor();
      $nuevoActor->first_name = $form["first_name"];
      $nuevoActor->last_name = $form["last_name"];
      $nuevoActor->rating = $form["rating"];
      $nuevoActor->favorite_movie_id = $form["favorite_movie_id"];

      $nuevoActor->save();
        return redirect('/actors');
    }

    public function edit(int $id){
      $actor = Actor::find($id);
      return view('/actors/edit', compact("actor"));
    }

    public function update(Request $form, string $id){

      $reglas = [
        "first_name"=>"required",
        "last_name"=>"required",
        "rating"=>"required",
        "favorite_movie_id"=>"required"
      ];
      $mensajes = [
        "required"=>"El campo :attribute es obligatorio."
      ];

      $this->validate($form, $reglas, $mensajes);

      $actor = Actor::find($id);
      $actor->first_name = $form["first_name"];
      $actor->last_name = $form["last_name"];
      $actor->rating = $form["rating"];
      $actor->favorite_movie_id = $form["favorite_movie_id"];

      $actor->save();
      return redirect('/actors');
    }

    public function destroy(Request $form){
      $actor = Actor::find($form["id_actor"]);
      $actor->delete();
      return redirect('/actors');

    }
}
