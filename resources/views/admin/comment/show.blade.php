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
              <td><b>Yorum ID</b></td>
              <td>{{$data->id}}</td>
            </tr>



            <tr>
              <td><b>Adı Soyadı</b></td>
              <td>{{$data->user->name}}</td>
            </tr>
            <tr>
              <td><b>Yorum</b></td>
              <td>{{$data->comment}}</td>
            </tr>
            <tr>
              <td><b>Değerlendirme</b></td>
              <td>{{$data->rate}}</td>
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
              <td><b>Oluşturma Tarihi</b></td>
              <td> {{$data->created_at}}</td>
            </tr>
            <tr>
              <td><b>Güncelleme Tarihi</b></td>
              <td>{{$data->updated_at}}</td>
            </tr>

            <tr>
              <td><b>Admin Notu</b></td>
              <td>
                <form class="form-horizontal" action="{{route('admin.comment.update', ['id'=>$data->id])}}" method="post">
                  @csrf

                    <select name="status">
                      <option selected>{{$data->status}}</option>
                      <option>True</option>
                      <option>False</option>
                    </select>

                    <br><br>

                    <div class="table table-striped">
                      <button type="submit" id="guncelle" name="guncelle" type="button" class="btn btn-primary">
                        Yorum Güncelle
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
