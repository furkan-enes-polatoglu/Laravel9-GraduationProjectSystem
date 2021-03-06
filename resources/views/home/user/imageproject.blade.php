@extends('layouts.adminwindow')

@section('title','Proje Resim Galerisi')

@section('head')

@section('content')



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

                        <h3>{{$project->title}} Projesi Resim Galerisi</h3><br><br>

                          <form class="form-horizontal" action="{{route('userpanel.store2',['pid'=>$project->id])}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <table>
                              <tr>
                                <td><b>Başlık:</b></td>
                                <td>&nbsp;&nbsp;&nbsp;<input
                                  type="text"
                                  id="baslik"
                                  name="baslik"
                                  placeholder="Başlık giriniz..."/> </td>




                                <td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resim:</b></td>
                                <td>

                                    &nbsp;&nbsp;&nbsp;<input
                                      type="file"
                                      class="custom-file-input"
                                      id="image"
                                      name="image"/>

                                 </td>

                            <td>
                                <div class="border-top">
                                    <button type="submit" id="ekle" name="ekle" type="button" class="btn btn-info">
                                      &nbsp;&nbsp;&nbsp;Resmi Yükle&nbsp;&nbsp;&nbsp;
                                    </button>
                                </div>
                            </td>
                        </tr>


                        </table>

                          </form>

                        <br>

                          <div class="col-12">
                            <div class="card">

                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col"><b>#</b></th>
                                    <th scope="col"><b>Başlık</b></th>
                                    <th scope="col"><b>Resim</b></th>
                                    <th scope="col"><b>Sil</b></th>

                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($images as $rs)
                                  <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                      @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height:150px; width:250px;">
                                      @endif
                                    </td>
                                    <td>
                                        <a href="{{route('userpanel.destory2', ['pid'=>$project->id, 'id'=>$rs->id])}}"  class="btn btn-danger" onClick="return confirm('Silmek istediğine emin misin?')">&nbsp;&nbsp;&nbsp;Sil&nbsp;&nbsp;&nbsp;</a>
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
