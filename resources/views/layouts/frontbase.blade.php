<html>
    <head>
        <title>@yield('title')</title>

        @section('head')
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="{{asset('assets')}}/scss/main.css">
          <link rel="stylesheet" href="{{asset('assets')}}/scss/skin.css">

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
          <script src="{{asset('assets')}}/script/index.js"></script>
        </head>
      @show

    <body>


      @include('home.header')
      @include('home.navbar')
      @yield('slider')
      @yield('content')
      @include('home.footer')

    </body>
</html>
