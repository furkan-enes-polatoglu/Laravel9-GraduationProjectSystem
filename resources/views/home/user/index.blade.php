@extends('layouts.frontbase')

@section('title','Profil | '.$setting->title)
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
                        <h4>PROFİL</h4>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>


    <section id="about-page-section-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 text-align">
                    <div class="section-heading">


                    </div>
                    <p>
                        @include('profile.show')

                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">

                </div>
            </div>
        </div>
    </section>





@endsection
