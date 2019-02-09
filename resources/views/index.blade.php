<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>films</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    </head>
    <body>
         <div class="container">
<!--   navbar starts-->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="{{ route('index') }}">Filomina</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('films') }}">Films</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('create') }}">Addnew</a>
          </li>
          
           @if (Route::has('login'))
                
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Log-out</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
             
            @endif
        </ul>
      </div>
    </nav>
    </div>
    <div class="container">
       <div class="row">
       <div class="col-md-12">
        <br>
        <h1 class="text-center">The Biggest Movie Database</h1>
        <br>
      <img src="{{ asset('images/mvi.jpeg')}}" class="img-fluid" style="height: 300px; width: 100%">
      <br>
      <br>
      <a href="{{ route('films') }}" type="button" class="detail text-center" style="width: 50%"><b>Browse Films -></b></a>
    </div>
    </div>
    </div>

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    </body>
</html>
