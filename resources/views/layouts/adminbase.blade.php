<html>
      <head>
          <title>@yield('title')</title>

          @section('head')
          <!DOCTYPE html>
          <html dir="ltr" lang="en">
            <head>
              <meta charset="utf-8" />
              <meta http-equiv="X-UA-Compatible" content="IE=edge" />
              <!-- Tell the browser to be responsive to screen width -->
              <meta name="viewport" content="width=device-width, initial-scale=1" />
              <meta
                name="keywords"
                content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
              />
              <meta
                name="description"
                content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
              />
              <meta name="robots" content="noindex,nofollow" />
              <!-- Favicon icon -->
              <link
                rel="icon"
                type="image/png"
                sizes="16x16"
                href="{{asset('admin')}}/assets/images/favicon.png"
              />
              <!-- Custom CSS -->
              <link href="{{asset('admin')}}/assets/libs/flot/css/float-chart.css" rel="stylesheet" />
              <!-- Custom CSS -->
              <link href="{{asset('admin')}}/dist/css/style.min.css" rel="stylesheet" />
              <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
              <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
              <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
              <![endif]-->
            </head>
        @show

        @section('header')
          @include('admin.header')
        @show

        @section('sidebar')
          @include('admin.sidebar')
        @show

        @yield('content')

        @section('footer')
          @include('admin.footer')
        @show