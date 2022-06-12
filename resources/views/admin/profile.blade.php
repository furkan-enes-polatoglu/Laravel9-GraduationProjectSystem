@extends('layouts.adminbase')

@section('title','Yorum Listesi')

@section('head')

@section('content')

@auth


<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Yorum Listesi</h4>
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

@include('profile.show')


</div>


@endsection

@else

<?php
  header("refresh:0;url=http://127.0.0.1:8000/loginadmin");
?>

@endauth
