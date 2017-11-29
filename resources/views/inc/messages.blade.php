

@if(count($errors)>0)
    @foreach ($errors->all() as $error)
    <br>
        <div class="alert alert-danger alert-dismissible fade show container" role="alert">
        {{$error}}
         @include('inc.dismiss')
        </div>
    @endforeach

@endif


@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success')}}

        @include('inc.dismiss')
    </div>
@endif

@if(session('error'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('error')}}
        @include('inc.dismiss')
    </div>
@endif