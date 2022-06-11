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
                        <h4>Proje Yükle</h4>
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
                                  <th scope="col"><b>Kategori</b></th>
                                  <th scope="col"><b>Başlık</b></th>
                                  <th scope="col"><b>Detay</b></th>
                                  <th scope="col"><b>Videlink</b></th>
                                  <th scope="col"><b>Resim</b></th>
                                  <th scope="col"><b>Resim Galerisi</b></th>
                                  <th scope="col"><b>Durum</b></th>
                                  <th scope="col"><b>Sil</b></th>
                                  <th scope="col"><b>Göster</b></th>

                                </tr>
                              </thead>
                              <tbody>
                              @foreach($project as $rs)
                                <tr>
                                  <td>{{$rs->id}}</td>
                                  <td>{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title) }}</td>
                                  <td>{{$rs->title}}</td>
                                  <td>{!! $rs->detail !!}</td>
                                  <td>{{$rs->videlink}}</td>
                                  <td>
                                    @if ($rs->image)
                                      <img src="{{Storage::url($rs->image)}}" style="height:50px; width:100px;">
                                    @endif
                                  </td>
                                  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{route('admin.image.index', ['pid'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                                      <img src="{{asset('admin')}}/assets/images/gallery.png" style="height:40px">
                                    </a>
                                  </td>
                                  <td>{{$rs->status}}</td>

                                  <td>
                                      <a href="{{route('userpanel.deleteproject', ['id'=>$rs->id])}}"  class="btn btn-danger" onClick="return confirm('Silmek istediğine emin misin?')">Sil</a>
                                  </td>
                                  <td>
                                      <a href="{{route('userpanel.showproject', ['id'=>$rs->id])}}" class="btn btn-success">Göster</a>
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
