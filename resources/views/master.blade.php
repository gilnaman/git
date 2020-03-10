<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta name="token" id="token" value="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="token" id="token" value="{{ csrf_token() }}">
    <title>@yield('titulo')</title>

    <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script type="text/JavaScript" src="js/vue.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
  <script type="text/JavaScript" src="js/vue.min.js"></script>

  </head>
  <body>
    @yield('contenido')



    @stack('scripts')
   <script src="js/jquery.min.js"></script>

    <script type="text/JavaScript" src="js/vue.min.js"></script>
    <script type="text/JavaScript" src="js/vue-resource.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

  </body>
</html> 