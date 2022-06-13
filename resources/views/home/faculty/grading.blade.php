@extends('layouts.frontbase')

@section('title','Proje Yükle | '.$setting->title)
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
                        <h4>Not Girişi</h4>
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

                      <div class="page-wrapper">
                        <div class="page-breadcrumb">
                          <div class="row">
                            <div class="col-12 d-flex no-block align-items-center">

                            </div>
                          </div>
                          <br>


                        </div>

                      <div class="container-fluid">
                        <a href="{{route('userpanel.createproject')}}" class="btn btn-info">Proje Ekle</a>

                        <div class="col-12"><br>
                          <div class="card">

                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col"><b>#</b></th>
                                  <th scope="col"><b>Adı Soyadı</b></th>
                                  <th scope="col"><b>Proje Adı</b></th>
                                  <th scope="col"><b>Not</b></th>
                                  <th scope="col"><b>Resim</b></th>
                                  <th scope="col"><b>Durum</b></th>
                                  <th scope="col"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not Girişi</b></th>
                                  <th scope="col"><b>Sil</b></th>


                                </tr>
                              </thead>
                              <tbody>
                              @foreach($evaluation as $rs)
                                <tr>
                                  <td>{{$rs->id}}</td>
                                  <td>{{$rs->user->name}}</td>
                                  <td>{{$rs->project->title}}</td>
                                  <td>{{$rs->grade}}</td>
                                  <td>
                                    @if ($rs->project->image)
                                      <img src="{{Storage::url($rs->project->image)}}" style="height:50px; width:100px;">
                                    @endif
                                  </td>

                                  <td>{{$rs->status}}</td>

                                  <td>
                                    <form action="{{route('facultypanel.givegrade', ['id'=>$rs->id])}}" method="post">
                                      @csrf

                                    <input type="text" id="grade" name="grade" size="1" >
                                    <input type="submit" value="Not Gir" class="btn btn-success">
                                    </form>
                                  </td>

                                  <td>
                                      <a href="{{route('userpanel.deleteproject', ['id'=>$rs->id])}}"  class="btn btn-danger" onClick="return confirm('Silmek istediğine emin misin?')">Sil</a>
                                  </td>



                                </tr>
                              @endforeach

                              </tbody>
                            </table>
                          </div>
                        </div>

                      </div>


                      </div>

                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">

                </div>
            </div>
        </div>
    </section>





@endsection
