<!DOCTYPE html>
<html>
<head>
  <title>@yield('titulo')</title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
  <nav>
   <div class="nav-wrapper purple accent-4">
     <div class="container">
       <a href="{{route('api.home')}}" class="brand-logo">Clã New Way</a>
       <ul class="right hide-on-med-and-down">
       <li><a href="{{route('api.all')}}">Controle de Guerreiros</a></li>
       </ul>
     </div>
 </nav>
</header>
