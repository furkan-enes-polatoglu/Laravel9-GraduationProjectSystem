<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{


  public function index() {
    $sliderdata=Project::limit(50)->get();
    return view('/home/index',[
      'sliderdata'=>$sliderdata
    ]);

  }


  public function about() { return view('/home/about'); }
  public function contact() { return view('/home/contact'); }
  public function faq() { return view('/home/faq'); }
  //public function features() { return view('/home/features'); }
  public function login() { return view('/home/login'); }


  public function project() {
    $projectlist1=Project::limit(50)->get();
    return view('/home/project',[
      'projectlist1'=>$projectlist1
    ]);
  }

  public function registration() { return view('/home/registration'); }


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
