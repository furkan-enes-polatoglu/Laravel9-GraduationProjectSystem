@extends('layouts.adminwindow')

@section('title','Kullanıcı Detay')

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
              <td><b>Kullanıcı ID</b></td>
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
              <td><b>Rol</b></td>
              <td>
                @foreach($data->roles as $role)
                  {{$role->name}}

                  <a href="{{route('admin.user.destroyrole', ['uid'=>$data->id, 'rid'=>$role->id])}}"  class="btn btn-danger" onClick="return confirm('Silmek istediğine emin misin?')">[x]</a>

                @endforeach
              </td>
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
              <td><b>Rol Ekle</b></td>
              <td>
                <form class="form-horizontal" action="{{route('admin.user.addrole', ['id'=>$data->id])}}" method="post">
                  @csrf
                  <select name="role_id">
                    @foreach($roles as $role)
                      <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                  </select name="role_id">

                    <br>

                    <div class="table table-striped">
                      <button type="submit" id="guncelle" name="guncelle" type="button" class="btn btn-primary">
                        Rol Ekle
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
