<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Comment;
use App\Models\RoleUser;;
use App\Models\Project;
use App\Models\Evaluation;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
      $student = RoleUser::select('user_id')->where('role_id','2')->get();
      $setting = Setting::first();
      return view('home.user.index',[
        'setting'=>$setting,
        'faculty'=>$faculty,
        'student'=>$student
      ]);
    }

    public function reviews()
    {
      $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
      $student = RoleUser::select('user_id')->where('role_id','2')->get();
        $setting = Setting::first();
        $comments = Comment::where('user_id','=',Auth::id())->get();
        return view('home.user.comments',[
          'setting'=>$setting,
          'comments'=>$comments,
          'faculty'=>$faculty,
          'student'=>$student
        ]);
    }


    public function createproject()
    {
      $project = Project::latest("id")->first()->get();
      $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
      $student = RoleUser::select('user_id')->where('role_id','2')->get();
      $category = Category::all();
      $setting = Setting::first();
      return view('home.user.createproject',[
        'setting'=>$setting,
        'category'=>$category,
        'faculty'=>$faculty,
        'student'=>$student,
        'project'=>$project
      ]);
    }


    public function uploadproject()
    {
      $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
      $student = RoleUser::select('user_id')->where('role_id','2')->get();
        $project = Project::where('user_id','=',Auth::id())->get();
        //$project = Project::all();
        $setting = Setting::first();
        return view('home.user.uploadproject',[
          'setting'=>$setting,
          'project'=>$project,
          'faculty'=>$faculty,
          'student'=>$student
        ]);
    }





    public function storeproject(Request $request)
    {
        $project = Project::all();
        $setting = Setting::first();
        $data = new Project();
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id();
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->videlink = $request->videlink;
        $data->status = "False";
        if($request->file('image')){
          $data->image = $request->file('image')->store('images');
        }
        $data->save();

        //header("Location:http://127.0.0.1:8000/userpanel/uploadproject");
        /*return view('home.user.uploadproject',[
          'setting'=>$setting,
          'project'=>$project
        ]);*/


          return redirect('userpanel/uploadproject');

    }


    public function gradecheck(Request $req)
    {
        $data1 = new Project();
        $data2 = Evaluation::all();
        $data2->user_id = Auth::id();
        $data2->project_id = $data1->id;
        $data2->status = "New";
        $data2->save();

        return redirect('userpanel/uploadproject');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function showproject(Project $project, $id)
     {
       $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
       $student = RoleUser::select('user_id')->where('role_id','2')->get();
       $setting = Setting::first();
       $data  = Project::find($id);
       return view('home.user.showproject',[
         'data' => $data,
         'setting'=>$setting,
         'faculty'=>$faculty,
         'student'=>$student
       ]);

     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function deleteproject($id)
     {
       $data  = Project::find($id);
       $data->delete();
       return redirect(route('userpanel.uploadproject'));
     }


    public function reviewdelete($id)
    {
        $data  = Comment::find($id);
        $data->delete();
        return redirect(route('userpanel.reviews'));

    }





}
