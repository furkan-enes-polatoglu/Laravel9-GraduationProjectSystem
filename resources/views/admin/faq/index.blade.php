@extends('layouts.adminbase')

@section('title','SSS')

@section('head')

@section('content')

@auth

<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">SSS Listesi</h4>
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
    <a href="{{route('admin.faq.create')}}" class="btn btn-primary">Soru Ekle</a>

  </div>

<div class="container-fluid">

  <div class="col-12">
    <div class="card">

      <table class="table">
        <thead>
          <tr>
            <th scope="col"><b>#</b></th>
            <th scope="col"><b>Soru</b></th>
            <th scope="col"><b>Cevap</b></th>
            <th scope="col"><b>Durum</b></th>
            <th scope="col"><b>Düzenle</b></th>
            <th scope="col"><b>Sil</b></th>

          </tr>
        </thead>
        <tbody>
        @foreach($data as $rs)
          <tr>
            <td>{{$rs->id}}</td>
            <td>{{$rs->question}}</td>
            <td>{!! $rs->answer !!}</td>
            <td>{{$rs->status}}</td>
            <td>
                <a href="{{route('admin.faq.edit', ['id'=>$rs->id])}}" class="btn btn-secondary">Düzenle</a>
            </td>
            <td>
                <a href="{{route('admin.faq.destory', ['id'=>$rs->id])}}"  class="btn btn-danger" onClick="return confirm('Silmek istediğine emin misin?')">Sil</a>
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


@else

<?php
  header("refresh:0;url=http://127.0.0.1:8000/loginadmin");
?>

@endauth
