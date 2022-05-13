@extends('layouts.frontbase')

@section('title', $data->title)

@section('head')


@section('content')
<body id="wrapper">


    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2></h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>{{$data->title}}</h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;">Anasayfa / Projeler / <span>{{$data->title}}</span>


                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

    <section id="about-page-section-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 text-align">
                    <div class="section-heading">
                        <h2>About <span>Us</span></h2>
                        <p class="subheading">Lorem ipsum send do tempor consectetur ipsum send do tempor.</p>
                    </div>
                    <p>
                        Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh
                        etlibura. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura.

                        <br><br> Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer
                        adipis elit, aliquam eget nibh etlibura.

                    </p>
                    <button type="button" class="btn btn-primary slide">Learn More <i class="fa fa-caret-right"></i></button>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <img height="" width="auto" src="{{asset('assets')}}/img/iphone62.png" class="attachment-full img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>


</body>

</html>


@endsection
