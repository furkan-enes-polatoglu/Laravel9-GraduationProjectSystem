<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use App\Models\Message;


class HomeController extends Controller
{


  public function index() {
    $sliderdata=Project::limit(50)->get();
    $setting = Setting::first();
    return view('home.index',[
      'sliderdata'=>$sliderdata,
      'setting'=>$setting
    ]);
  }


  public function project() {
    $projectlist1=Project::limit(50)->get();
    $setting = Setting::first();
    return view('home.project',[
      'projectlist1'=>$projectlist1,
      'setting'=>$setting
    ]);
  }


  public function projectdetail($id) {
    $data = Project::find($id);
    $setting = Setting::first();
    $images = DB::table('images')->where('project_id',$id)->get();
    return view('home.projectdetail',[
      'data'=>$data,
      'images'=>$images,
      'setting'=>$setting
    ]);
  }


  public function about() {
    $setting = Setting::first();
    return view('home.about',[
      'setting'=>$setting
    ]);
  }


  public function contact() {
    $setting = Setting::first();
    return view('home.contact', [
      'setting'=>$setting
    ]);
  }


  public function storemessage(Request $request) {
    //dd($request);
    $data = new Message();
    $data->name = $request->input('name');
    $data->email = $request->input('email');
    $data->phone = $request->input('phone');
    $data->company = $request->input('company');
    $data->subject = $request->input('subject');
    $data->message = $request->input('message');
    $data->ip = $request->ip();
    $data->save();

    return redirect()->route('contact')->with('info','Mesajınız gönderildi!');
  }


  public function faq() {
    $setting = Setting::first();
    return view('home.faq', [
      'setting'=>$setting
    ]);
  }


  //public function features() { return view('/home/features'); }
  public function login() {
    $setting = Setting::first();
    return view('home.login', [
      'setting'=>$setting
    ]);
  }



  public function registration() {
    $setting = Setting::first();
    return view('home.registration', [
      'setting'=>$setting
    ]);
  }


  public function references() {
    $setting = Setting::first();
    return view('home.references', [
      'setting'=>$setting
    ]);
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
