<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

// INICIA PRACTICA 13/02/20

/* OPCIÓN 1 -> COMPACT

Route::get('/{nombre}/{apellido?}', function ($nombre, $apellido = "") {
  $vac = compact($nombre, $apellido);
  return view('welcome', $vac);
});

*/
/* OPCIÓN 2 -> []

Route::get('/{nombre}/{apellido?}', function ($nombre, $apellido = "") {
  $vac = compact($nombre, $apellido);
  return view('welcome', ["nombre" => $nombre, "apellido" => $apellido]);
});

*/
/* OPCIÓN 3 -> with()

Route::get('/{nombre}/{apellido?}', function ($nombre, $apellido = "") {
  $vac = compact($nombre, $apellido);
  return view('welcome')->with('conEsteNombreViajaAlaVista', $nombre)->with('apellidoEnLaVista', $apellido);
});                             $nombreEnLaVista = $nombre                   $apellidoEnLaVista = $apellido

*/

Route::get('/miPrimerRuta', function () {
  return "Cree mi ruta en laravel";
});

Route::get('/esPar/{nro}', function ($nro) {
  if ($nro%2==0) {
    return "Es par";
  }
  return "Es impar";
});

Route::get('/sumar/{nro1}/{nro2}/{nro3?}', function ($nro1, $nro2, $nro3=0) {
  return $nro1 + $nro2 + $nro3;
});

Route::get('/peliculas', function() {
  $arrayPeliculas = [
    0 => [
      "nombre" =>"peli1",
      "rating" =>9
    ],
    1 => [
      "nombre" =>"peli2",
      "rating" =>6
    ],
    2 => [
      "nombre" =>"peli3",
      "rating" =>5
    ],
    3 => [
      "nombre" =>"peli4",
      "rating" =>7
    ],
    4 =>[
      "nombre" =>"peli5",
      "rating" =>10
    ]
  ];
  // $vac = compact("arrayPeliculas");
  // $arrayPeliculas = ["peli1", "peli2", "peli3", "peli4", "peli5"];
  return view("peliculas", compact("arrayPeliculas"));
});

Route::get('/esPar/{nro}', function ($nro) {
  if ($nro%2==0) {
    return "Es par";
  }
  return "Es impar";
});

Route::get('/sumar/{nro1}/{nro2}/{nro3?}', function ($nro1, $nro2, $nro3=0) {
  return $nro1 + $nro2 + $nro3;
});

Route::get('/peliculas/{id}', function($id) {
  $arrayPeliculas = [
    0 => [
      "id" => 1,
      "nombre" =>"peli1",
      "rating" =>9
    ],
    1 => [
      "id" => 2,
      "nombre" =>"peli2",
      "rating" =>6
    ],
    2 => [
      "id" => 3,
      "nombre" =>"peli3",
      "rating" =>5
    ],
    3 => [
      "id" => 4,
      "nombre" =>"peli4",
      "rating" =>7
    ],
    4 =>[
      "id" => 5,
      "nombre" =>"peli5",
      "rating" =>10
    ]
  ];
  // $vac = compact("arrayPeliculas");
  // $arrayPeliculas = ["peli1", "peli2", "peli3", "peli4", "peli5"];
  return view("detallePelicula", compact("arrayPeliculas", "id"));
});

//FIN PRACTICA 13/02/20

// INICIA PRACTICA 18/02/20
Route::get('/actores', "ActorController@directory");
// Route::get('/actor/{id}', "ActorController@show");
Route::get('/actores/buscar/{name_actor?}', "ActorController@search");
Route::get('/actores/buscar/actor/{id}', "ActorController@show");

// FIN PRACTICA 18/02/20

// INICIA PRACTICA 27/02/20
Route::get('/peliculas', "PeliculasController@listado");

Route::get('/agregarPelicula', function () {
  return view('agregarPelicula');
});
Route::post('/agregarPelicula', 'PeliculasController@agregar');
Route::get('/pelicula/{id}', 'PeliculasController@buscarPelicula');
Route::post('/borrarPelicula', 'PeliculasController@borrar');

//practica hecha en el curso 27/02/20:
//1)a.- Agregado:
Route::get('/actors', "ActorController@directory");
Route::post('/actors/add', 'ActorController@store');
Route::get('/actors/add', function(){
  return view('/actors/add');
});
//1)b.- Actualizado:
// Route::get('/actor/{id}/edit', function($id){
//   return view('/actors/edit');
// });
Route::get('/actor/{id}/edit', 'ActorController@edit');
// Route::post('/actor/{id}/edit', 'ActorController@edit');
Route::put('/actor/{id}', 'ActorController@update');

//1)c.- Eliminar:
Route::get('/actor/{id}', 'ActorController@show');
Route::delete('/actor/{id}', 'ActorController@destroy');

// FIN PRACTICA 27/02/20
