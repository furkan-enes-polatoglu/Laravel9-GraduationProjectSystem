@extends('layouts.adminbase')

@section('title','Proje Detay')

@section('head')

@section('content')

<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Proje Detay</h4>
        <div class="ms-auto text-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/project">Proje Listesi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Proje Detay
                    </li>
                  </ol>

              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

<br>

<div class="container-fluid">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><a href="{{route('admin.project.edit', ['id'=>$data->id])}}" class="btn btn-secondary">Düzenle</a> &nbsp; <a href="{{route('admin.project.edit', ['id'=>$data->id])}}" onClick="return confirm('Silmek istediğine emin misin?')" class="btn btn-danger">Sil</a></h5>
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


@endsection
