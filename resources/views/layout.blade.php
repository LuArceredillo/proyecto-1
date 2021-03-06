<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="pagina web para iaw uns">
    <meta name="author" content="Lucila Arceredillo">
    <meta name="generator" content="Jekyll v3.8.5">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
    <link   href="{{ secure_asset('css/estilo.css') }}" rel="stylesheet">    
    
    <!-- Bootstrap core CSS -->
     @yield('head')
    <title>Recetario</title>
  </head>
   @include('navbar')
 

<main role="main">
  
  @yield('content')
  
</main>  
  @include('footer')

  
     @yield('scripts')
    <script src="{{ secure_asset('/js/editarPerfil.js') }}"></script>
    <!-- scripts para el carousel  -->
    <script defer  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"   crossorigin="anonymous"></script>
    <link defer rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"   crossorigin="anonymous">
    
   <!-- <script defer  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script> -->
     
   
  </html>
