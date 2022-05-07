@extends('layouts.adminbase')

@section('title','Kategori Ekle')

@section('head')

@section('content')

<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Kategori Ekle</h4>
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
    <form class="form-horizontal" action="/admin/category/store" method="post">
      @csrf
      <div class="card-body">
        <h4 class="card-title">Yeni Kategori</h4><br>
        <div class="form-group row">
          <label
            for="baslik"
            class="col-sm-3 text-end control-label col-form-label"
            >Başlık</label
          >
          <div class="col-sm-9">
            <input
              type="text"
              class="form-control"
              id="baslik"
              name="baslik"
              placeholder="Başlık giriniz..."
            />
          </div>
        </div>
        <div class="form-group row">
          <label
            for="anahtarKelime"
            class="col-sm-3 text-end control-label col-form-label"
            >Anahtar Kelime</label
          >
          <div class="col-sm-9">
            <input
              type="text"
              class="form-control"
              id="anahtarKelime"
              name="anahtarKelime"
              placeholder="Anahtar kelime giriniz..."
            />
          </div>
        </div>

        <div class="form-group row">
          <label
            for="aciklama"
            class="col-sm-3 text-end control-label col-form-label"
            >Açıklama</label
          >
          <div class="col-sm-9">
            <input
              type="text"
              class="form-control"
              id="aciklama"
              name="aciklama"
              placeholder="Açıklama giriniz..."
            />
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resim</label>
          <div class="col-md-3">
            <div class="custom-file">
              <input
                type="file"
                class="custom-file-input"
                id="dosyaYukle"
                name="dosyaYukle"

              />

              <div class="invalid-feedback">
                Example invalid custom file feedback
              </div>
            </div>
          </div>
        </div>


        <div class="form-group row">
          <label class="col-md-3 mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Durum</label>
          <div class="col-md-9">
            <select name="status"
              class="select2 form-select shadow-none"
              style="width: 100%; height: 36px">

                <option name="bir" id="bir" value="true">True</option>
                <option name="sifir" id="sifir" value="false">False</option>

              </optgroup>
            </select>
          </div>
        </div>




      <div class="border-top">
        <div class="card-body">
          <button type="submit" id="gonder" name="gonder" type="button" class="btn btn-primary">
            Ekle
          </button>
        </div>
      </div>
    </form>
  </div>

</div>
</div>


</div>


@endsection