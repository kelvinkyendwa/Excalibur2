@extends ('master')
@section('title', 'Movies')
@section('content')
    <div class="py-5 text-white" style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/test_lily.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <p class="lead"><i>"Movies are like 2 hour pieces of Cake"</i>
            <br> </p>
          <p class="lead m-0"><b>Kelvin Mitau - Times</b></p>
        </div>
      </div>
    </div>
  </div>
	<div>
  <br>
<div class="container">
<br>
<br>

<legend>List of Movies</legend>
<hr>
<div class="row">
    @foreach ($movie as $item)
    
   <div class="col-md-4">
   <div class="card mb-3">
        <img class="card-img-top" src="http://via.placeholder.com/350x150" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">{{ $item->name }}</h4>
          <p class="card-text info">{{ $item->description }}</p>
          @if (Auth::check())
              <a class="btn btn-danger" href="{{url ('movies')}}/{{$item->id}}/edit">Edit</a>
            @else
              <P style="color: red; "><strong><a href="{{url ('login')}}"> Login to edit</a></strong></P>
            @endif
            <a href="/movies/{{$item->id}}" class="btn btn-info">Check out Review</a>
        </div>
      </div>
   </div>
   <br>

      



      @endforeach
      </div>
	</div>	
  </div>						
@endsection
