<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Faq;
use App\Models\Comment;
use App\Models\RoleUser;


class HomeController extends Controller
{


  public function index() {
    $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
    $student = RoleUser::select('user_id')->where('role_id','2')->get();
    $sliderdata=Project::where('status','True')->get();
    $setting = Setting::first();
    return view('home.index',[
      'sliderdata'=>$sliderdata,
      'setting'=>$setting,
      'faculty'=>$faculty,
      'student'=>$student
    ]);
  }


  public function project() {
    $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
    $student = RoleUser::select('user_id')->where('role_id','2')->get();
    //$projectlist1=Project::limit(50)->get();
    $projectlist1 = Project::where('status','True')->get();
    $setting = Setting::first();
    return view('home.project',[
      'projectlist1'=>$projectlist1,
      'setting'=>$setting,
      'faculty'=>$faculty,
      'student'=>$student
    ]);
  }


  public function search(Request $req) {
    $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
    $student = RoleUser::select('user_id')->where('role_id','2')->get();
     $setting = Setting::first();
     $searchlist = Project::where('title','like','%'.$req->input('query').'%')->get();
     return view('home.search',['searchlist'=>$searchlist, 'setting'=>$setting, 'faculty'=>$faculty, 'student'=>$student]);

    /*//$projectlist1=Project::limit(50)->get();
    $projectlist1 = Project::where('status','True')->get();
    return view('home.project',[
      'projectlist1'=>$projectlist1
    ]);*/
  }


  public function projectdetail($id) {
    $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
    $student = RoleUser::select('user_id')->where('role_id','2')->get();
    $data = Project::find($id);
    $setting = Setting::first();
    $images = DB::table('images')->where('project_id',$id)->get();
    $reviews = Comment::where('project_id',$id)->where('status','True')->get();
    return view('home.projectdetail',[
      'data'=>$data,
      'images'=>$images,
      'setting'=>$setting,
      'reviews'=>$reviews,
      'faculty'=>$faculty,
      'student'=>$student
    ]);
  }


  public function about() {
    $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
    $student = RoleUser::select('user_id')->where('role_id','2')->get();
    $setting = Setting::first();
    return view('home.about',[
      'setting'=>$setting,
      'faculty'=>$faculty,
      'student'=>$student
    ]);
  }


  public function contact() {
    $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
    $student = RoleUser::select('user_id')->where('role_id','2')->get();
    $setting = Setting::first();
    return view('home.contact', [
      'setting'=>$setting,
      'faculty'=>$faculty,
      'student'=>$student
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



  public function storecomment(Request $request) {
    //dd($request);
    $data = new Comment();
    $data->user_id = Auth::id();
    $data->project_id = $request->input('project_id');
    $data->comment = $request->input('comment');
    $data->rate = $request->input('rate');
    $data->ip = $request->ip();
    $data->save();

    return redirect()->route('projectdetail', ['id'=>$request->input('project_id')])->with('info','Mesajınız gönderildi!');
  }


  public function faq() {
    $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
    $student = RoleUser::select('user_id')->where('role_id','2')->get();
    $setting = Setting::first();
    $datalist = Faq::all();
    return view('home.faq', [
      'setting'=>$setting,
      'datalist'=>$datalist,
      'faculty'=>$faculty,
      'student'=>$student
    ]);
  }


  //public function features() { return view('/home/features'); }
  /*public function login() {
    $setting = Setting::first();
    return view('home.login', [
      'setting'=>$setting
    ]);
  }*/



  public function registration() {
    $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
    $student = RoleUser::select('user_id')->where('role_id','2')->get();
    $setting = Setting::first();
    return view('home.registration', [
      'setting'=>$setting,
      'faculty'=>$faculty,
      'student'=>$student
    ]);
  }


  public function references() {
    $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
    $student = RoleUser::select('user_id')->where('role_id','2')->get();
    $setting = Setting::first();
    return view('home.references', [
      'setting'=>$setting,
      'faculty'=>$faculty,
      'student'=>$student
    ]);
  }


  public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/home');
  }



  public function loginadmincheck(Request $request)
  {
      $credentials = $request->validate([
          'email' => ['required', 'email'],
          'password' => ['required'],
      ]);

      if (Auth::attempt($credentials)) {
          $request->session()->regenerate();
          return redirect()->intended('/admin/project');
      }
      else {
        $error = "Kullanıcı adı veya şifre hatalı!";
        return redirect()->intended('/loginadmin');
      }

      return back()->withErrors([
          'error' => 'The provided credentials do not match our records.',
      ])->onlyInput('email');
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
