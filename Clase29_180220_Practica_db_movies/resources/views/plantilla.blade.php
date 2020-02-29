<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> @yield('titulo') </title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @yield('listadoPeliculas')
    @yield('detallePelicula')
    @yield('listadoActores')
    @yield('detalleActor')
    @yield('agregarPelicula')
    @yield('actoresAdd')
    @yield('actorsEdit')
  </body>
</html>
