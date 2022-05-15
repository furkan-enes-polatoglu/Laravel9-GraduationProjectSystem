@extends('layouts.frontbase')

@section('title','SSS | '.$setting->title)
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
                        <h4>SSS</h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;">Anasayfa<span class="sep"> 	/ </span><span class="current"> SSS</span></div>
                </div>
            </div>
        </div>

        </div>
    </section>


    <section id="faq">
        <div class="titlebar">
            <div class="container">
                <div class="row">
                    <div class="section-heading text-center">
                        <div class="col-md-12 col-xs-12">
                            <h2>Know Us <span>More</span></h2>
                            <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset nam nostrud euismod volumus ne mei.</p>
                        </div>
                    </div>
                </div>



                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="rich-accordian">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


                          @foreach($datalist as $rs)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading{{$loop->iteration}}">
                                    <h4 class="panel-title">
                                        <div class="icon-circle"> <i class="fa fa-question"></i></div>
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="collapse{{$loop->iteration}}">
                                    {{$rs->question}}
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapse{{$loop->iteration}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$loop->iteration}}">
                                    <div class="panel-body">
                                        {!! $rs->answer !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>

@endsection
