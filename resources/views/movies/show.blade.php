@extends ('master')
@section('title', 'Movies')
@section('content')
<br>
<br>
<br>
<div class="container">

    <h4>{{$movie->name}} <small><strong> - {{$movie->rating}}/10 </strong></small></h4>
    <hr>
    <div class="">
    <p>{{$movie->review}}</p>
    </div>
<a href="{{ url ('movies')}}" class="btn btn-light">Back</a>
</div>
@endsection