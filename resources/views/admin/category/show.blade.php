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
      <h5 class="card-title">Detay</h5>
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
              <td><b>Keywords</b></td>
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
