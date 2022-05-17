@extends('layouts.frontbase')

@section('title','Proje Detay | '.$data->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    .mySlides {display:none;}
    </style>
    <body>
      <br>

    <div class="w3-content w3-display-container">
      @foreach($images as $rs)
        <img class="mySlides" src="{{Storage::url($rs->image)}}" style="width:980px; height:500px;">
      @endforeach

      <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>
    <br><br>

    <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      x[slideIndex-1].style.display = "block";
    }
    </script>



<table align="center" id="customers">
  <tr>
    <td style="width:250px"><b>Proje Adı<b/></td>
    <td>{{$data->title}}</td>
  </tr>
  <tr>
    <td><b>Anahtar Kelimeler</b></td>
    <td>{{$data->keywords}}</td>
  </tr>
  <tr>
    <td style="width:250px"><b>Açıklama</b></td>
    <td>{{$data->description}}</td>
  </tr>
  <tr>
    <td style="width:250px"><b>Detay</b></td>
    <td>{!! $data->detail !!}</td>
  </tr>

</table>

<br><br>













<!--

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

-->


</body>

</html>


@endsection
