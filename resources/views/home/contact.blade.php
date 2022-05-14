@extends('layouts.frontbase')

@section('title','İletişim | '.$setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('head')

@section('content')

<html>


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
                        <h4>İletişim</h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;">Anasayfa<span class="sep"> / </span><span class="current">İletişim</span></div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <section id="contact-page">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Bize <span>Mesaj</span> Bırakın</h2>
                <p class="subheading">{!! $setting->contact !!}</p><br><br>
                <p class="subheading"><b>

                @if($message = Session::get('info'))
                  <?php
                  echo '<script type ="text/JavaScript">';
                  echo 'alert("Mesajınız gönderildi, teşekkürler!")';
                  echo '</script>';
                  header("refresh:1;url=/contact"); ?>
                @endif</b></p>


            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="{{route('storemessage')}}">
                  @csrf
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Ad Soyad *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>E-posta *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Telefon</label>
                            <input type="number" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <label>Kurum Adı</label>
                            <input type="text" class="form-control" name="company">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Konu *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Mesaj *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-default submit-button">Mesajı Gönder <i class="fa fa-caret-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="overlay">
            <div class="gmap-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="gmap">
                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12005.0387353717!2d32.652046177083704!3d41.216111082176496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408354ac4492953f%3A0xab3b48ed0392a743!2sKarab%C3%BCk%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1649455971288!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-sm-7 map-content">
                            <ul class="row">
                                <li class="col-sm-6">
                                    <address>
									<h5>Adres</h5>
									<p>{{$setting->address}}<br>
									</p>
								</address>

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>

@endsection
