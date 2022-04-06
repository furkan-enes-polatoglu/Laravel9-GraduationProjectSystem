<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function index(){
    return view('/home/index');
  }

  public function about(){
    return view('/home/about');
  }



    /*public function save(Request $request){
      $ad = $_REQUEST['ad'];
      $soyad = $_REQUEST['soyad'];

      return view('goster',[
        'ad' => $ad,
        'soyad' => $soyad
      ]);
    }*/


    /*public function param($number, $adi){
      echo "Adı: ".$adi;
      echo "Numara: ".$number;
    }*/
}
