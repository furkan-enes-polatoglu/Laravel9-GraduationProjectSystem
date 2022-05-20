@extends('layouts.adminbase')

@section('title','SSS Ekle')

@section('head2')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')


@auth

<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">SSS Ekle</h4>
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
  <div class="col-md-9">
  <div class="card">
    <form class="form-horizontal" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="card-body">
        <h4 class="card-title">Yeni SSS</h4><br>




        <div class="form-group row">
          <label
            for="question"
            class="col-sm-3 text-end control-label col-form-label"
            ><b>Soru</b></label
          >
          <div class="col-sm-9">
            <input
              type="text"
              class="form-control"
              id="question"
              name="question"
              placeholder="Soru giriniz..."
            />
          </div>
        </div>


        <div class="form-group row">
          <label
            for="answer"
            class="col-sm-3 text-end control-label col-form-label"
            ><b>Cevap</b></label
          >
          <div class="col-sm-9">
            <textarea
              type="text"
              class="form-control"
              id="answer"
              name="answer"
              placeholder="Cevap giriniz..."
            /> </textarea>

            <script>
                        ClassicEditor
                                .create( document.querySelector( '#answer' ) )
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
            for="baslik"
            class="col-sm-3 text-end control-label col-form-label"
            ><b>Durum</b></label
          >          <div class="col-md-9">
            <select name="status"
              class="select2 form-select shadow-none"
              style="width: 100%; height: 36px">

                <option name="bir" id="bir" value="True">True</option>
                <option name="sifir" id="sifir" value="False">False</option>

              </optgroup>
            </select>
          </div>
        </div>




      <div class="border-top">
        <div class="card-body">
          <button type="submit" id="ekle" name="ekle" type="button" class="btn btn-primary">
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


@else

<?php
  header("refresh:0;url=http://127.0.0.1:8000/loginadmin");
?>

@endauth
