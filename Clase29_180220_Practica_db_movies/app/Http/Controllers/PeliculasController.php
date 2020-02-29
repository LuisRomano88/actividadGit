<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PeliculasController extends Controller
{

    public function listado(){
      //$peliculas = Movie::all(); // Este metodo hace por detras: SELECT * FROM tabla (la que aclaramos en el modelo Pelicula, o sea, movies)
      $peliculas = Movie::orderBy('title')->paginate(5);
      $vac = compact("peliculas");
      // dd($peliculas);
      return view("peliculas", $vac);
    }
    //la variable $form tendrá todos los campos del
    //formulario haciendo qe no tengamos que trabajar ni con $_GET ni con $_POST
    public function agregar(Request $form){
      $peliculaNueva = new Movie();
      $peliculaNueva->title = $form["title"];
      $peliculaNueva->rating = $form["rating"];
      $peliculaNueva->awards = $form["awards"];
      $peliculaNueva->release_date = $form["release_date"];

      $peliculaNueva->save();  // automaticamente con save() Laravel hace el insert a la base de datos. Y si la pelicula ya existiece save() hace un update
      return redirect('/peliculas');
    }

    public function buscarPelicula(int $id){
      $pelicula = Movie::find($id);
      return view("detallePelicula", compact("pelicula"));
    }

    public function borrar(Request $form){
      $pelicula = Movie::find($form["id"]);
      $pelicula->delete();
      return redirect('/peliculas');
    }
}
