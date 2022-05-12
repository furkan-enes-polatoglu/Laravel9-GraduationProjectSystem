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

<!-- START SLİDER CSS -->

          <meta name="viewport" content="width=device-width, initial-scale=1">
          <style>
          * {box-sizing: border-box;}
          body {font-family: Verdana, sans-serif;}
          .mySlides {display: none;}
          img {vertical-align: middle;}

          /* Slideshow container */
          .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
          }

          /* Caption text */
          .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
          }

          /* Number text (1/3 etc) */
          .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }

          /* The dots/bullets/indicators */
          .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }

          .active {
            background-color: #717171;
          }

          /* Fading animation */
          .fade {
            animation-name: fade;
            animation-duration: 1.5s;
          }

          @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
          }

          /* On smaller screens, decrease text size */
          @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
          }
          </style>

<!-- END OF SLİDER CSS -->

        </head>
      @show

    <body>

@section('header')
  @include('home.header')
@show

@section('navbar')
  @include('home.navbar')
@show

@section('slider')
@show

@yield('content')

@section('footer')
  @include('home.footer')
@show


    </body>
</html>
