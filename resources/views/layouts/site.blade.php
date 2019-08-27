<!doctype html>
<html lang="ru">
  <head>
  	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  	<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/jumbotron.css')}}"> -->
    <title>Jumbotron Template for Bootstrap</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        .jumbotron {
          padding:4rem 2rem;
          height: 230px;
        }

      }
      
    </style>
    <!-- Custom styles for this template -->
  </head>
  <body>
    
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
  <a class="navbar-brand" href="http://laravel/">Нome🏠</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
  </button>
  <ul class="navbar-nav mr-auto">
    @guest
                            
                            @if (Route::has('login')) 
                                
                            @endif
                        @elseif (Auth::user()->is_admin == '1')
  <li class="nav-item">
        <a class="nav-link" href="/page/add">Add new article</a>
      </li>@endguest
</ul>
<ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
    <!-- <form class="form-inline my-2 my-lg-0"  method="post" name="form">
      <input class="form-control mr-sm-2" type="text" placeholder="Поиск страны" aria-label="Search" name="subject" id="subject"> 
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn" ><a href="#">Поиск</a></button>
    </form> -->
  </div>
</nav>

<main role="main">

 @yield('content')

</main>

<footer class="container">
  <p>&copy; Company 2017-2018</p>
</footer>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script> -->

</body>
</html>
<!-- <script type="text/javascript">
function someFunc(){
  alert(document.getElementById("subject").value);
  }
  document.getElementById("btn").onclick = someFunc;
  </script> -->