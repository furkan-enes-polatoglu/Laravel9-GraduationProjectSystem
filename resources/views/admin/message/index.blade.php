@extends('layouts.adminbase')

@section('title','İletişim Formu Mesaj Listesi')

@section('head')

@section('content')

<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">İletişim Formu Mesaj Listesi</h4>
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

  </div>

<div class="container-fluid">

  <div class="col-12">
    <div class="card">

      <table class="table">
        <thead>
          <tr>
            <th scope="col"><b>#</b></th>
            <th scope="col"><b>Ad Soyad</b></th>
            <th scope="col"><b>E-Posta</b></th>
            <th scope="col"><b>Telefon</b></th>
            <th scope="col"><b>Kurum</b></th>
            <th scope="col"><b>Konu</b></th>
            <th scope="col"><b>Durum</b></th>
            <th scope="col"><b>Göster</b></th>
            <th scope="col"><b>Sil</b></th>

          </tr>
        </thead>
        <tbody>
        @foreach($data as $rs)
          <tr>
            <td>{{$rs->id}}</td>
            <td>{{$rs->name}}</td>
            <td>{{$rs->email}}</td>
            <td>{{$rs->phone}}</td>
            <td>{{$rs->company}}</td>
            <td>{{$rs->subject}}</td>
            <td>{{$rs->status}}</td>

            <td>
                <a class="btn btn-primary" href="{{route('admin.message.show', ['id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=800')">
                  Göster
                </a>
            </td>


            <td>
                <a href="{{route('admin.message.destory', ['id'=>$rs->id])}}"  class="btn btn-danger" onClick="return confirm('Silmek istediğine emin misin?')">Sil</a>
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
