<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- javascript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    
    <title>@yield('title')</title>
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
	  <div class="container">
	  	  <a class="navbar-brand" href="#">Masnumi</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link active" href="{{ url('') }}">Home<span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link active" href="barang">Produk</a>
		      <a class="nav-item nav-link active" href="/wilayah">Wilayah</a>
		      <a class="nav-item nav-link active" href="user">User</a>
		      <a class="nav-item nav-link active" href="/contact" tabindex="-1" aria-disabled="true">Contact</a>
              <a class="nav-item nav-link active" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
		      <!-- Right Side Of Navbar -->
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
                                   
                                </div>
                            </li>
                        @endguest
                    </ul>
		    </div>
		  </div>
	  </div>
	</nav>

	<div class="carousel-item">
	  <img src="..." alt="...">
	  <div class="carousel-caption d-none d-md-block">
	    <h5>...</h5>
	    <p>...</p>
	  </div>
	</div>

	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	  	@yield('content')
	  </div>

	  <!-- pagination -->
	  <nav aria-label="Page navigation">
	  <ul class="pagination justify-content-center">
	    @yield('pagination')
	  </ul>
	  </nav>
	</div>

	

