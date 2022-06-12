@extends('layouts.frontbase')

@section('title','Projeler | '.$setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('head')

<!DOCTYPE html>
<html>


@section('content')

<body id="wrapper">


    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>HİÇBİRİMİZ HEPİMİZ KADAR İYİ OLAMAYIZ</h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>Projeler</h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;">Anasayfa<span class="sep"> / </span><span class="current">Projeler</span></div>
                </div>
            </div>
        </div>

        </div>
    </section>


    <section id="portfolio">
        <div class="container">
<br>

            <div class="row">

              <form id="main-contact-form" class="contact-form" name="contact-form" action="{{route('search')}}">
                @csrf
                        <center>
                          <table>
                            <tr>
                              <td><b><font size="5">Proje Ara:</font></b></td>
                              <td>&nbsp;  &nbsp;<input type="text" name="query" required="required" size="70" placeholder="Aramak istediğiniz projeyi yazınız..."></td>
                              <td> &nbsp; <button type="submit" name="search" class="btn btn-dark">Ara <i class="fa fa-search"></i></button></td>
                            </tr>
                          </table>



                        </center>
                          <br><br>
              </form>
<br>

              @foreach($searchlist as $rs)
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
                    <div class="portfolio-one">
                        <div class="portfolio-head">
                            <div class="portfolio-img"><img alt="" src="{{Storage::url($rs->image)}}" style="width:360px; height:360px;"></div>
                            <div class="portfolio-hover">
                                <a class="portfolio-link" href="/projectdetail/{{$rs->id}}"><i class="fa fa-link"></i></a>
                                <a class="portfolio-zoom prettyPhoto" href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <!-- End portfolio-head -->
                        <div class="portfolio-content">
                            <h5 class="title">{{$rs->title}}</h5>
                            <p>{{$rs->description}}</p>
                        </div>
                        <!-- End portfolio-content -->
                    </div>
                    <!-- End portfolio-item -->
                </div>
                @endforeach








            </div>
            </div>
        </div>
    </section>


</body>

</html>
  @endsection
