<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ url ('/')}}"><i class="fa d-inline fa-lg fa-youtube-play"></i><b>  Excalibur Reloaded </b></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent"
      aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
      <ul class="navbar-nav text-uppercase">
        <li class="nav-item">
          <a class="nav-link" href="{{ url ('/movies')}}"></i> MOVIES </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url ('/series')}}"></i> TV SHOWS </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url ('/trailers')}}"></i> TRAILERS </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url ('/blog')}}"></i> BLOG </a>
        </li>
        @if (Auth::check())
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url ('movies/create')}}">Review Movie</a>
          <a class="dropdown-item" href="#">Review Series</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url ('logout') }}">Logout</a>
        </div>
        </li>
       
    @else
        <li class="nav-item"><a href="{{ url ('login') }}" class="nav-link">Login</a> </li>
        <li class="nav-item"><a href="{{ url ('register') }}" class="nav-link">Register</a> </li>
    @endif
        </li>
      </ul>
    </div>
  </div>
</nav>
