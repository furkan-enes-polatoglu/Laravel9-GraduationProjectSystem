@extends('layouts.frontbase')

@section('title','Proje Detay | '.$setting->title)
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
                        <h4>Proje Detay</h4>
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

                        </div>


                        <div class="page-wrapper">
                          <div class="page-breadcrumb">
                            <div class="row">

                            </div>
                          </div>



                        <div class="container-fluid">

                          <div class="card">
                            <div class="card-body">
                              <div class="table-responsive">
                                <table
                                  id="zero_config"
                                  class="table table-striped"
                                >


                                  <tbody>
                                    <tr>
                                      <td><b>ID</b></td>
                                      <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                      <td><b>Ana Kategori</b></td>
                                      <td>
                                        {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title) }}
                                      </td>
                                    </tr>
                                    <tr>
                                      <td><b>Başlık</b></td>
                                      <td>{{$data->title}}</td>
                                    </tr>
                                    <tr>
                                      <td><b>Anahtar Kelimeler</b></td>
                                      <td>{{$data->keywords}}</td>
                                    </tr>
                                    <tr>
                                      <td><b>Açıklama</b></td>
                                      <td>{{$data->description}}</td>
                                    </tr>
                                    <tr>
                                      <td><b>Detay Bilgisi</b></td>
                                      <td>{!! $data->detail !!}</td>
                                    </tr>
                                    <tr>
                                      <td><b>Videlink</b></td>
                                      <td>{{$data->videlink}}</td>
                                    </tr>
                                    <tr>
                                      <td><b>Resim</b></td>
                                      <td>  @if ($data->image)
                                          <img src="{{Storage::url($data->image)}}" style="height:100px; width:175px;">
                                        @endif</td>
                                    </tr>
                                    <tr>
                                      <td><b>Durum</b></td>
                                      <td>{{$data->status}}</td>
                                    </tr>
                                    <tr>
                                      <td><b>Oluşturulma Zamanı</b></td>
                                      <td>{{$data->created_at}}</td>
                                    </tr>
                                    <tr>
                                      <td><b>Güncelleme Zamanı</b></td>
                                      <td>{{$data->updated_at}}</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>


                        </div>




                      </div>

                    </p>
                </div>
                <br><br><br><br><br><br><br><br>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">

                </div>
            </div>
        </div>
    </section>





@endsection
