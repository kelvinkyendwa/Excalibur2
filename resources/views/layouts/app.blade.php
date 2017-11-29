<html>

@include('inc.head')
<body>
    @include('layouts.navigation')
      <div>
          @include('inc.messages')
          @yield('content')
      </div>
   @include('inc.scripts')
</body>

</html>
