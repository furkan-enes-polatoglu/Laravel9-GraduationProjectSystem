<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Comment;
use App\Models\Project;
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
      $setting = Setting::first();
      return view('home.user.index',[
        'setting'=>$setting
      ]);
    }

    public function reviews()
    {
        $setting = Setting::first();
        $comments = Comment::where('user_id','=',Auth::id())->get();
        return view('home.user.comments',[
          'setting'=>$setting,
          'comments'=>$comments
        ]);
    }


    public function createproject()
    {
      $category = Category::all();
      $setting = Setting::first();
      return view('home.user.createproject',[
        'setting'=>$setting,
        'category'=>$category
      ]);
    }


    public function uploadproject()
    {
        $project = Project::where('user_id','=',Auth::id())->get();
        //$project = Project::all();
        $setting = Setting::first();
        return view('home.user.uploadproject',[
          'setting'=>$setting,
          'project'=>$project
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
       $setting = Setting::first();
       $data  = Project::find($id);
       return view('home.user.showproject',[
         'data' => $data,
         'setting'=>$setting
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


    public function index2($pid)
    {
        $setting = Setting::first();
        $project = Project::find($pid);
        $images = DB::table('images')->where('project_id',$pid)->get();
        return view('home.user.imageproject',[
          'project' => $project,
          'images' => $images,
          'setting' => $setting

        ]);
    }


    public function store2(Request $request, $pid)
    {
      $data = new Image();
      $data->project_id = $pid;
      $data->title = $request->baslik;
      if($request->file('image')){
        $data->image = $request->file('image')->store('images');
      }
      $data->save();
      return redirect()->route('admin.image.index', ['pid'=>$pid]);
    }


    public function destroy2($pid, $id)
    {
        //
        $data  = Image::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)){
          Storage::delete($data->image);
        }
        $data->delete();
        return redirect()->route('admin.image.index', ['pid'=>$pid]);

    }


}
