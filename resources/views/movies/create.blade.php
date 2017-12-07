@extends ('master')
@section('title', 'Movies')
@section('content')

<div class="container">
<br><br>
    <h1>Add a Movie review</h1>
    {!! Form::open(['action' => 'MovieController@store', 'method' => 'POST']) !!}
                <div class="form-row">
                        <div class="col">
                            {{Form::label('name', 'Movie Title')}}
                            {{Form::text('name', '' , [ 'class' => 'form-control', 'placeholder'=> 'Movie Title'] )}}
                        </div>
                        <div class="col">
                            {{Form::label('genre', 'Genre')}}
                            {{Form::text('genre', '' , [ 'class' => 'form-control', 'placeholder'=> 'Genre'] )}}
                        </div>
                    </div>
                        
                <div class="form-group">
                            {{Form::label('rating', 'Rating')}}
                            {{Form::text('rating', '' , [ 'class' => 'form-control', 'placeholder'=> 'Out of ten'] )}}
                </div>
                <div class="form-group">
                            {{Form::label('url', 'Image Url')}}
                            {{Form::text('url', '' , [ 'class' => 'form-control', 'placeholder'=> 'Url'] )}}
                </div>
                <div class="form-row">
                        <div class="col">
                            {{Form::label('description', 'Description')}}
                            {{Form::textarea('description', '' , ['class' => 'form-control', 'placeholder'=> 'Brief Description'] )}}
                        </div>
                        <div class="col">
                            {{Form::label('review', 'Add A Review')}}
                            {{Form::textarea('review', '' , [ 'id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder'=> 'Add A Review'] )}}
                        </div>
                </div>
                <br>
        {{Form::submit('Submit', ['class'=>'btn btn-primary dark'])}}
    {!! Form::close() !!}


</div>


@endsection