@extends('layouts.adminbase')

@section('title','Ayarlar')

@section('head')

@section('head2')
  <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')


@auth

<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Ayarlar</h4>
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
    <!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {font-family: Arial;}

    /* Style the tab */
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      border: 1px solid #ccc;
      border-top: none;
    }
    </style>
    </head>
    <body>

    <p>Click on the buttons inside the tabbed menu:</p>

    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'Genel')">Genel</button>
      <button class="tablinks" onclick="openCity(event, 'SMTPEPosta')">SMTP E-Posta</button>
      <button class="tablinks" onclick="openCity(event, 'SosyalMedya')">Sosyal Medya</button>
      <button class="tablinks" onclick="openCity(event, 'Hakkimizda')">Hakkımızda</button>
      <button class="tablinks" onclick="openCity(event, 'Iletisim')">İletişim</button>
      <button class="tablinks" onclick="openCity(event, 'Referanslar')">Referanslar</button>


    </div>


    <form class="form-horizontal" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
      @csrf

    <div id="Genel" class="tabcontent">

      <br>
      <div class="form-group row">
        <input type="hidden" name="id" id="id" value="{{$data->id}}">
        <label
          for="title"
          class="col-sm-3"
          ><b>&nbsp;Başlık</b></label
        ><br>
        <div class="col-sm-9">
          <input
            type="text"
            class="form-control"
            id="title"
            name="title"
            placeholder="Başlık giriniz.."
            value="{{$data->title}}"
          />
        </div>
    </div>


    <div class="form-group row">
      <label
        for="keywords"
        class="col-sm-3"
        ><b>&nbsp;Anahtar Kelimeler</b></label
      ><br>
      <div class="col-sm-9">
        <input
          type="text"
          class="form-control"
          id="keywords"
          name="keywords"
          placeholder="Anahtar Kelime giriniz..."
          value="{{$data->keywords}}"
        />
      </div>
  </div>


  <div class="form-group row">
    <label
      for="description"
      class="col-sm-3"
      ><b>&nbsp;Açıklama</b></label
    ><br>
    <div class="col-sm-9">
      <input
        type="text"
        class="form-control"
        id="description"
        name="description"
        placeholder="Açıklama giriniz..."
        value="{{$data->description}}"
      />
    </div>
</div>


<div class="form-group row">
  <label
    for="company"
    class="col-sm-3"
    ><b>&nbsp;Kurum</b></label
  ><br>
  <div class="col-sm-9">
    <input
      type="text"
      class="form-control"
      id="company"
      name="company"
      placeholder="Kurum giriniz..."
      value="{{$data->company}}"
    />
  </div>
</div>


<div class="form-group row">
  <label
    for="address"
    class="col-sm-3"
    ><b>&nbsp;Adres</b></label
  ><br>
  <div class="col-sm-9">
    <input
      type="text"
      class="form-control"
      id="address"
      name="address"
      placeholder="Adres giriniz..."
      value="{{$data->address}}"
    />
  </div>
</div>


<div class="form-group row">
  <label
    for="phone"
    class="col-sm-3"
    ><b>&nbsp;Telefon</b></label
  ><br>
  <div class="col-sm-9">
    <input
      type="text"
      class="form-control"
      id="phone"
      name="phone"
      placeholder="Telefon giriniz..."
      value="{{$data->phone}}"
    />
  </div>
</div>


<div class="form-group row">
  <label
    for="fax"
    class="col-sm-3"
    ><b>&nbsp;Fax</b></label
  ><br>
  <div class="col-sm-9">
    <input
      type="text"
      class="form-control"
      id="fax"
      name="fax"
      placeholder="Fax giriniz..."
      value="{{$data->fax}}"
    />
  </div>
</div>


<div class="form-group row">
  <label
    for="email"
    class="col-sm-3"
    ><b>&nbsp;E-Posta</b></label
  ><br>
  <div class="col-sm-9">
    <input
      type="text"
      class="form-control"
      id="email"
      name="email"
      placeholder="E-Posta giriniz..."
      value="{{$data->email}}"
    />
  </div>
</div>


<div class="form-group row">
  <label class="col-md-3"><b>İkon</b></label>
  <div>

    <div class="custom-file">
      <input
        type="file"
        class="custom-file-input"
        id="icon"
        name="icon"
      />
      <div class="invalid-feedback">
        Example invalid custom file feedback
      </div>
    </div>
  </div>
</div>


<div class="form-group row">
  <label
    for="status"
    class="col-sm-3"
    ><b>&nbsp;Durum</b></label> <br>
          <div class="col-md-9">
    <select name="status"
      class="select2 form-select shadow-none"
      style="width: 100%; height: 36px">

        <option name="true" id="true" value="True">True</option>
        <option name="true" id="true" value="False">False</option>

      </optgroup>
    </select>
  </div>
</div>

<br>
<button type="submit" id="update" name="update" type="button" class="btn btn-primary">
  Ayarları Güncelle
</button>

  </div>



    <div id="SMTPEPosta" class="tabcontent">

      <br>
      <div class="form-group row">
        <label
          for="smtpserver"
          class="col-sm-3"
          ><b>&nbsp;SMTP Server</b></label
        ><br>
        <div class="col-sm-9">
          <input
            type="text"
            class="form-control"
            id="smtpserver"
            name="smtpserver"
            placeholder="SMTP Server giriniz.."
            value="{{$data->smtpserver}}"
          />
        </div>
    </div>


    <div class="form-group row">
      <label
        for="smtpemail"
        class="col-sm-3"
        ><b>&nbsp;SMTP E-Posta</b></label
      ><br>
      <div class="col-sm-9">
        <input
          type="text"
          class="form-control"
          id="smtpemail"
          name="smtpemail"
          placeholder="SMTP E-Posta giriniz.."
          value="{{$data->smtpemail}}"
        />
      </div>
  </div>


  <div class="form-group row">
    <label
      for="smtppassword"
      class="col-sm-3"
      ><b>&nbsp;SMTP Parola</b></label
    ><br>
    <div class="col-sm-9">
      <input
        type="text"
        class="form-control"
        id="smtppassword"
        name="smtppassword"
        placeholder="SMTP Parola giriniz.."
        value="{{$data->smtppassword}}"
      />
    </div>
</div>


<div class="form-group row">
  <label
    for="smtpport"
    class="col-sm-3"
    ><b>&nbsp;SMTP Port</b></label
  ><br>
  <div class="col-sm-9">
    <input
      type="text"
      class="form-control"
      id="smtpport"
      name="smtpport"
      placeholder="SMTP Port giriniz.."
      value="{{$data->smtpport}}"
    />
  </div>
</div>


<br>
<button type="submit" id="updatesmtpemail" name="updatesmtpemail" type="button" class="btn btn-primary">
  Ayarları Güncelle
</button>

    </div>



    <div id="SosyalMedya" class="tabcontent">

<br>
      <div class="form-group row">
        <label
          for="twitter"
          class="col-sm-3"
          ><b>&nbsp;Twitter</b></label
        ><br>
        <div class="col-sm-9">
          <input
            type="text"
            class="form-control"
            id="twitter"
            name="twitter"
            placeholder="Twitter adresi giriniz.."
            value="{{$data->twitter}}"
          />
        </div>
      </div>


      <div class="form-group row">
        <label
          for="linkedin"
          class="col-sm-3"
          ><b>&nbsp;Linkedin</b></label
        ><br>
        <div class="col-sm-9">
          <input
            type="text"
            class="form-control"
            id="linkedin"
            name="linkedin"
            placeholder="Linkedin adresi giriniz.."
            value="{{$data->linkedin}}"
          />
        </div>
      </div>

      <br>
      <button type="submit" id="updatesocialmedia" name="updatesocialmedia" type="button" class="btn btn-primary">
        Ayarları Güncelle
      </button>


    </div>


    <div id="Hakkimizda" class="tabcontent">
      <br>
      <label
        for="aboutus"
        class="col-sm-3"
        ><b>&nbsp;Hakkımızda</b></label
      ><br>
      <textarea id="aboutus" name="aboutus">
        {{$data->aboutus}}
      </textarea>

      <br>
      <button type="submit" id="updateaboutus" name="updateaboutus" type="button" class="btn btn-primary">
        Ayarları Güncelle
      </button>

      <script>
            ClassicEditor
              .create( document.querySelector( '#aboutus' ) )
                  .then( editor => {
                      console.log( editor );
                  } )
                  .catch( error => {
                      console.error( error );
                  } );
          </script>
    </div>


    <div id="Iletisim" class="tabcontent">

      <br>
      <label
        for="contact"
        class="col-sm-3"
        ><b>&nbsp;İletişim</b></label
      ><br>
      <textarea id="contact" name="contact">
        {{$data->contact}}
      </textarea>

      <br>
      <button type="submit" id="updatecontact" name="updatecontact" type="button" class="btn btn-primary">
        Ayarları Güncelle
      </button>

      <script>
            ClassicEditor
              .create( document.querySelector( '#contact' ) )
                  .then( editor => {
                      console.log( editor );
                  } )
                  .catch( error => {
                      console.error( error );
                  } );
          </script>
    </div>


    <div id="Referanslar" class="tabcontent">

      <br>
      <label
        for="references"
        class="col-sm-3"
        ><b>&nbsp;Referanslar</b></label
      ><br>
      <textarea id="references" name="references">
        {{$data->references}}
      </textarea>

      <br>
      <button type="submit" id="updatereferences" name="updatereferences" type="button" class="btn btn-primary">
        Ayarları Güncelle
      </button>

      <script>
            ClassicEditor
              .create( document.querySelector( '#references' ) )
                  .then( editor => {
                      console.log( editor );
                  } )
                  .catch( error => {
                      console.error( error );
                  } );
          </script>
    </div>



    <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    </script>

    </body>
    </html>



  </div>
</div>


@endsection


@else

<?php
  header("refresh:0;url=http://127.0.0.1:8000/loginadmin");
?>

@endauth
