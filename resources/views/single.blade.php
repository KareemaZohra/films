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
    <br>
    <section id="single-film">
        <h1 class="text-center">{{$film->fname}}</h1>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                  <div class="alert alert-primary" role="alert">
                    Release Date : {{$film->release_date}}
                  </div><div class="alert alert-primary" role="alert">
                    Ticket Price : {{$film->ticket_price}}
                  </div><div class="alert alert-primary" role="alert">
                    Country : {{$film->country}}
                  </div><div class="alert alert-primary" role="alert">
                    Genere : {{$film->genere}}
                  </div>
                </div>
                <div class="col-md-4">
                  <img src="{{asset('images/'.$film->image)}}" class="img-fluid">
                
                </div>
                <div class="col-md-5"><p>{{$film->description}}</p></div>
            </div>
            <div class="row">
              <div class="offset-md-2 col-md-8">
               @if (Route::has('login'))
                
                    @auth
                       <h3>Post a comment : </h3>
                       <form action="{{route('comment_store')}}" method="post">
                          <div class="form-group">
                          <input type="text" class="form-control" name="c_name" placeholder="Your Name ..." required>
                          </div> 
                          <div class="form-group">
                            <textarea class="form-control" name="comments" placeholder="Write Something ..." rows="2" required></textarea>
                          </div>
                          <div class="row text-center">
                            <button type="submit">Comment</button>
                          </div>
                       </form>
                    @else
                        
                    @endauth
             
            @endif
          </div>
            </div>
        </div>
    </section>

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    </body>
</html>
