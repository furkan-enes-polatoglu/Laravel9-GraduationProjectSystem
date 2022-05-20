@extends('layouts.adminwindow')

@section('title','Mesaj Detay')

@section('head')

@section('content')

@auth

<br>

<div class="container-fluid">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title"></h5>
      <div class="table-responsive">
        <table
          id="zero_config"
          class="table table-striped"
        >


          <tbody>
            <tr>
              <td><b>Message ID</b></td>
              <td>{{$data->id}}</td>
            </tr>

            <tr>
              <td><b>Adı Soyadı</b></td>
              <td>{{$data->name}}</td>
            </tr>
            <tr>
              <td><b>E-Posta</b></td>
              <td>{{$data->email}}</td>
            </tr>
            <tr>
              <td><b>Telefon</b></td>
              <td>{{$data->phone}}</td>
            </tr>
            <tr>
              <td><b>Kurum</b></td>
              <td>{{$data->company}}</td>
            </tr>
            <tr>
              <td><b>Konu</b></td>
              <td>{{$data->subject}}</td>
            </tr>
            <tr>
              <td><b>Mesaj</b></td>
              <td> {{$data->message}}</td>
            </tr>
            <tr>
              <td><b>IP</b></td>
              <td>{{$data->IP}}</td>
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
            <tr>
              <td><b>Admin Notu</b></td>
              <td>
                <form class="form-horizontal" action="{{route('admin.message.update', ['id'=>$data->id])}}" method="post">
                  @csrf
                      <textarea
                      type="text"
                      class="form-control"
                      id="note"
                      name="note"
                      placeholder="Not giriniz..."
                    />{{$data->note}}</textarea>

                    <br>

                    <div class="table table-striped">
                      <button type="submit" id="guncelle" name="guncelle" type="button" class="btn btn-primary">
                        Notu Güncelle
                      </button>
                    </div>

                </form>
            </td>
            </tr>
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
