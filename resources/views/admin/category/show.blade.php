@extends('layouts.adminbase')

@section('title','Kategori Detay')

@section('head')

@section('content')

<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Kategori Detay</h4>
        <div class="ms-auto text-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/category">Kategori Listesi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Kategori Detay
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
      <h5 class="card-title"><a href="{{route('admin.category.edit', ['id'=>$data->id])}}" class="btn btn-secondary">Düzenle</a> &nbsp; <a href="{{route('admin.category.edit', ['id'=>$data->id])}}" onClick="return confirm('Silmek istediğine emin misin?')" class="btn btn-danger">Sil</a></h5>
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
              <td><b>Başlık</b></td>
              <td>{{$data->title}}</td>
            </tr>
            <tr>
              <td><b>Anahtar Kelimeler</b></td>
              <td>{{$data->keywords}}</td>
            </tr>
            <tr>
              <td><b>Resim</b></td>
              <td>{{$data->image}}</td>
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
