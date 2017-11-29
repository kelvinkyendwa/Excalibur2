@extends ('master')
@section('title', 'Home')
@section('content')
  <div class="py-5 text-center opaque-overlay" style="background-image: url(https://www.capitalfm.co.ke/campus/files/2015/01/BestShows.jpg);">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12 text-white">
          <!-- <h1 class="mb-4 display-2">Excalibur Reloaded</h1> -->
          <!-- <p class="lead mb-5">Tv Shows and Movie Reviews </p> -->
          <a href="{{ url ('/movies')}}" class="btn btn-lg mx-1 btn-secondary">Movies</a>
          <a href="{{ url ('/series')}}" class="btn btn-lg btn-warning mx-1">Tv Shows</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center display-3 text-dark">Tv Shows and Movie Reviews By Fans Like You</h1>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>
@endsection
