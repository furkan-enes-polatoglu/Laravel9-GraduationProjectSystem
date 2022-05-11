@extends('layouts.adminbase')

@section('title','Proje Listesi')

@section('head')

@section('content')

<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Proje Listesi</h4>
        <div class="ms-auto text-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <br>
    <a href="{{route('admin.project.create')}}" class="btn btn-primary">Proje Ekle</a>

  </div>

<div class="container-fluid">

  <div class="col-12">
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
            <th scope="col"><b>Durum</b></th>
            <th scope="col"><b>Düzenle</b></th>
            <th scope="col"><b>Sil</b></th>
            <th scope="col"><b>Göster</b></th>

          </tr>
        </thead>
        <tbody>
        @foreach($data as $rs)
          <tr>
            <td>{{$rs->id}}</td>
            <td>{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title) }}</td>
            <td>{{$rs->title}}</td>
            <td>{{$rs->detail}}</td>
            <td>{{$rs->videlink}}</td>
            <td>
              @if ($rs->image)
                <img src="{{Storage::url($rs->image)}}" style="height:50px; width:100px;">
              @endif
            </td>
            <td>{{$rs->status}}</td>
            <td>
                <a href="{{route('admin.project.edit', ['id'=>$rs->id])}}" class="btn btn-secondary">Düzenle</a>
            </td>
            <td>
                <a href="{{route('admin.project.destory', ['id'=>$rs->id])}}"  class="btn btn-danger" onClick="return confirm('Silmek istediğine emin misin?')">Sil</a>
            </td>
            <td>
                <a href="{{route('admin.project.show', ['id'=>$rs->id])}}" class="btn btn-primary">Göster</a>
            </td>


          </tr>
        @endforeach

        </tbody>
      </table>
    </div>
  </div>

</div>


</div>


@endsection
