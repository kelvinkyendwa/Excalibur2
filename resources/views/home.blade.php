@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div> 
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>You are logged in!</h3>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{url ('movies/create')}}"> Review Movies</a></li>
                        <li class="list-group-item"><a href="">Review series</a></li>
                        <li class="list-group-item"><a href="{{url ('movies')}}">Check Out Movie Reviews</a></li>
                        <li class="list-group-item"><a href="{{url ('series')}}">Check Out Series Reviews</a></li>
                        <li class="list-group-item"><a href="">Watch Trailers</a></li>
                    </ul>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
