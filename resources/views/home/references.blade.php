@extends('layouts.frontbase')

@section('title','Referanslar | '.$setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('head')

@section('content')
<section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>HİÇBİRİMİZ HEPİMİZ KADAR İYİ OLAMAYIZ...</h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>Referanslarımız</h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;">Anasayfa<span class="sep"> 	/ </span><span class="current"> Referanslar</span></div>
                </div>
            </div>
        </div>

        </div>
    </section>


    <section id="contact-page">
        <div class="container">


                    <div class="section-heading">
<br>
                    </div>

                        {!! $setting->references !!}






        </div>
    </section>



@endsection
