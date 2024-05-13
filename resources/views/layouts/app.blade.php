<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>PF @yield('title')</title>
</head>
<body>
    @include('partials.navigation')
      @if(session('status'))
       <div>
         {{ session('status')}}
       </div>
        @endif
    @yield('content')
</body>
</html>