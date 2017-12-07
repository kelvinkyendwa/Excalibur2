@extends ('master')
@section('title', 'Movies')
@section('content')
<br>
<br>
<br>
<div class="container">

    <h4>{{$movie->name}} <small><strong> - {{$movie->rating}}/10 </strong></small></h4>
    <hr>
    <div class="row">
    <div class="col-md-6" style="border-right=solid 1px;">
    <img class="card-img-top responsive" src="{{ $movie->url }}" alt="Card image cap">
    </div>
    <div class="col-md-6">
    <p>{!! $movie->review !!}</p>
    </div>
    </div>
    <br>
<a href="{{ url ('movies')}}" class="btn btn-dark">Back</a>
</div>
@endsection