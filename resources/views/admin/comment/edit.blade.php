@extends('layouts.adminbase')

@section('title','Proje Düzenle')

@section('head2')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')

@auth

<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Proje Düzenle</h4>
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
  <div class="col-md-6">
  <div class="card">
    <form class="form-horizontal" action="{{route('admin.project.update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="card-body">
        <h4 class="card-title"><b>{{$data->title}}</b> Projesini Düzenle</h4><br>


        <div class="form-group row">
          <label
            for="baslik"
            class="col-sm-3 text-end control-label col-form-label"><b>Ana Proje</b></label>
            <div class="col-md-9">
            <select name="category_id"
              class="select2 form-select shadow-none"
              style="width: 100%; height: 36px">
              @foreach($datalist as $rs)
                <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                  {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title )}}</option>
              @endforeach
              </optgroup>
            </select>
          </div>
        </div>


        <div class="form-group row">
          <label
            for="baslik"
            class="col-sm-3 text-end control-label col-form-label"
            ><b>Başlık</b></label
          >
          <div class="col-sm-9">
            <input
            value="{{$data->title}}"
              type="text"
              class="form-control"
              id="baslik"
              name="title"
              placeholder="Başlık giriniz.."
            />
          </div>
        </div>
        <div class="form-group row">
          <label
            for="anahtarKelime"
            class="col-sm-3 text-end control-label col-form-label"
            ><b>Anahtar Kelime</b></label
          >
          <div class="col-sm-9">
            <input
            value="{{$data->keywords}}"
              type="text"
              class="form-control"
              id="anahtarKelime"
              name="keywords"
              placeholder="Anahtar kelime giriniz..."
            />
          </div>
        </div>

        <div class="form-group row">
          <label
            for="aciklama"
            class="col-sm-3 text-end control-label col-form-label"
            ><b>Açıklama</b></label
          >
          <div class="col-sm-9">
            <input
            value="{{$data->description}}"
              type="text"
              class="form-control"
              id="aciklama"
              name="description"
              placeholder="Açıklama giriniz..."
            />
          </div>
        </div>

        <div class="form-group row">
          <label
            for="aciklama"
            class="col-sm-3 text-end control-label col-form-label"
            ><b>Detay Bilgisi</b></label
          >
          <div class="col-sm-9">
            <textarea
              type="text"
              class="form-control"
              id="detail"
              name="detail"
              placeholder="Detay giriniz..."
            />{{$data->detail}}</textarea>

            <script>
                        ClassicEditor
                                .create( document.querySelector( '#detail' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>

          </div>
        </div>


        <div class="form-group row">
          <label
            for="aciklama"
            class="col-sm-3 text-end control-label col-form-label"
            ><b>Videlink</b></label
          >
          <div class="col-sm-9">
            <input
            value="{{$data->videlink}}"
              type="text"
              class="form-control"
              id="videlink"
              name="videlink"
              placeholder="Videlink giriniz..."
            />
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Resim</b></label>
          <div class="col-md-3">
            <div class="custom-file">
              <input
                type="file"
                class="custom-file-input"
                id="image"
                name="image"

              />


              <form class="form-horizontal" action="{{route('admin.project.update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                  <a href="{{route('admin.project.ImageDestory', ['id'=>$data->id])}}" onClick="return confirm('Mevcut resmi silmek istediğine emin misin?')" class="btn btn-danger">Mevcut Resimi Kaldır</a>
              </form>


              <div class="invalid-feedback">
                Example invalid custom file feedback
              </div>
            </div>
          </div>
        </div>


        <div class="form-group row">
          <label class="col-md-3 mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Durum</b></label>
          <div class="col-md-9">
            <select name="status"
              class="select2 form-select shadow-none"
              style="width: 100%; height: 36px">
                <option selected>{{$data->status}}</option>
                <option name="bir" id="bir" value="True">True</option>
                <option name="sifir" id="sifir" value="False">False</option>

              </optgroup>
            </select>
          </div>
        </div>




      <div class="border-top">
        <div class="card-body">
          <button type="submit" id="guncelle" name="guncelle" type="button" class="btn btn-primary">
            Güncelle
          </button>
        </div>
      </div>
    </form>
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
