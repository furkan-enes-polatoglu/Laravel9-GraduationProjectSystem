@extends('layouts.frontbase')

@section('title','Proje Detay | '.$data->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('head')
@section('head2')


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
  <tr>
    <td style="width:250px"><b>Değerlendirme</b></td>
    @php
      $average = $data->comment->average('rate');
    @endphp

    <td> @for ($i=1; $i<=$average; $i++) ★ @endfor &nbsp; {{number_format($average,2)}} / 5  </td>
  </tr>

</table>


<br><br>
<table align="center" width="800px;">

  @if($comment = Session::get('info'))
    <?php
    echo '<script type ="text/JavaScript">';
    echo 'alert("Yorumunuz gönderildi, teşekkürler!")';
    echo '</script>';
    header("refresh:1;"); ?>
  @endif</b></p>

<tr>
  <td align="center">
    <h2>Bir <span>yorum</span> yazın!</h2>
  </td>
</tr>

<form action="{{route('storecomment')}}" method="post">
  @csrf
  <input type="hidden" name="project_id" value="{{$data->id}}">


<tr>
  <td>
    <div class="form-group">
        <label>Yorum: </label>
        <textarea name="comment" id="comment" required="required" class="form-control" rows="8" placeholder="Yorum giriniz..."></textarea>
    </div>
  </td>
</tr>

<tr>


  <td>
    <b>Değerlendirme :</b><br>
    <div class="rating">
    <label>
      <input type="radio" id="star1" name="rate" value="1" />
      <span class="icon">★</span>
    </label>
    <label>
      <input type="radio" id="star2" name="rate" value="2" />
      <span class="icon">★</span>
      <span class="icon">★</span>
    </label>
    <label>
      <input type="radio" id="star3" name="rate" value="3" />
      <span class="icon">★</span>
      <span class="icon">★</span>
      <span class="icon">★</span>
    </label>
    <label>
      <input type="radio" id="star4" name="rate" value="4" />
      <span class="icon">★</span>
      <span class="icon">★</span>
      <span class="icon">★</span>
      <span class="icon">★</span>
    </label>
    <label>
      <input type="radio" id="star5" name="rate" value="5" />
      <span class="icon">★</span>
      <span class="icon">★</span>
      <span class="icon">★</span>
      <span class="icon">★</span>
      <span class="icon">★</span>
    </label>
</div>
  </td>
</tr>

<tr>
  <td>
    <div class="form-group">
      <br>
      @auth
        <button type="submit" name="submit" class="btn btn-default submit-button">Yorum  Gönder <i class="fa fa-caret-right"></i></button>
      @else
      <a href="/login" class="btn btn-default submit-button">Yorum Yazmak İçin Lütfen Giriş Yapın</a>

      @endauth
    </div>




<br><br>
<h4><b>Tüm Yorumlar</b></h4>

@foreach($reviews as $rs)

<div class="container mt-5">
    <div class="row  d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card p-3 mt-2">
              <div class="d-flex justify-content-between align-items-center">
                  <div class="user d-flex flex-row align-items-center">
                    <br><img style="width:40px; height:40px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/800px-User_icon_2.svg.png" width="30" class="user-img rounded-circle mr-2">
                        <span><small class="font-weight-bold text-primary"><b><font size="4px">{{$rs->user->name}}: </font></b></small>  <small class="font-weight-bold"><font size="4px" color="black">{{$rs->comment}}</font></small> [Değerlendirme:  <span class="icon">@for ($i=1; $i<=$rs->rate; $i++) ★@endfor]</span></span>
                  </div>
                  <small>{{$rs->created_at}}</small>
              </div>
            </div>
        </div>
    </div>
  </div>
@endforeach













  </td>
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
