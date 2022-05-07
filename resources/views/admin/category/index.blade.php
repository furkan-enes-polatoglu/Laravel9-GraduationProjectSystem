@extends('layouts.adminbase')

@section('title','Kategori Listesi')

@section('head')

@section('content')

<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Kategori Listesi</h4>
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

<div class="container-fluid">

  <div class="col-12">
    <div class="card">

      <table class="table">
        <thead>
          <tr>
            <th scope="col"><b>#</b></th>
            <th scope="col"><b>Başlık</b></th>
            <th scope="col"><b>Anahtar Kelimeler</b></th>
            <th scope="col"><b>Açıklama</b></th>
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
            <td>{{$rs->title}}</td>
            <td>{{$rs->keywords}}</td>
            <td>{{$rs->description}}</td>
            <td>{{$rs->image}}</td>
            <td>{{$rs->status}}</td>
            <td>
                <a href="/admin/category/edit/{{$rs->id}}" class="btn btn-secondary">Düzenle</a>
            </td>
            <td>
                <a href="/admin/category/delete/{{$rs->id}}" class="btn btn-danger">Sil</a>
            </td>
            <td>
                <a href="/admin/category/show/{{$rs->id}}" class="btn btn-primary">Göster</a>
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
