<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pid)
    {
        $project = Project::find($pid);
        $images = DB::table('images')->where('project_id',$pid)->get();
        return view('admin.image.index',[
          'project' => $project,
          'images' => $images

        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $pid)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $pid, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pid, $id)
    {
        //
        $data  = Image::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)){
          Storage::delete($data->image);
        }
        $data->delete();
        return redirect()->route('admin.image.index', ['pid'=>$pid]);

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
      return redirect()->route('userpanel.index2', ['pid'=>$pid]);
    }


    public function destroy2($pid, $id)
    {
        //
        $data  = Image::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)){
          Storage::delete($data->image);
        }
        $data->delete();
        return redirect()->route('userpanel.index2', ['pid'=>$pid]);

    }
}
