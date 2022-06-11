@extends('layouts.frontbase')

@section('title','Yorumlarım | '.$setting->title)
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
                        <h4>YORUMLARIM</h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;">Home<span class="sep"> 	/ </span><span class="current"> About</span></div>
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




                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col"><b>#</b></th>
                            <th scope="col"><b>Proje Adı</b></th>
                            <th scope="col"><b>Yorum</b></th>
                            <th scope="col"><b>Değerlendirme</b></th>
                            <th scope="col"><b>Durum</b></th>
                            <th scope="col"><b>Sil</b></th>

                          </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $rs)
                          <tr>
                            <td>{{$rs->id}}</td>
                            <td><a href="{{route('projectdetail',['id'=>$rs->project_id])}}">
                              {{$rs->project->title}}
                            </a></td>
                            <td>{{$rs->comment}}</td>
                            <td>{{$rs->rate}}</td>
                            <td>{{$rs->status}}</td>




                            <td>
                                <a href="{{route('userpanel.reviewdelete', ['id'=>$rs->id])}}"  class="btn btn-danger" onClick="return confirm('Silmek istediğine emin misin?')">Sil</a>
                            </td>



                          </tr>
                        @endforeach

                        </tbody>
                      </table>





                    </p>
                </div>

            </div>
        </div>
    </section>





@endsection
