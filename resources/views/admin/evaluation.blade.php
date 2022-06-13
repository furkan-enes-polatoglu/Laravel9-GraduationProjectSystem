@extends('layouts.adminbase')

@section('title','Proje Listesi')


@section('head')

@section('content')
<section id="top_banner">

        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <br><br><h4>Değerlendirmeler</h4>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>



        <div class="container">

                    <p>
                      <br>
                            &nbsp;<table align="center" class="table">
                              <thead>
                                <tr>
                                  <th scope="col"><b>#</b></th>
                                  <th scope="col"><b>Adı Soyadı</b></th>
                                  <th scope="col"><b>Proje Adı</b></th>
                                  <th scope="col"><b>Not</b></th>
                                  <th scope="col"><b>Resim</b></th>
                                  


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




                                </tr>
                              @endforeach

                              </tbody>
                            </table>
                    </p>
        </div>






@endsection
