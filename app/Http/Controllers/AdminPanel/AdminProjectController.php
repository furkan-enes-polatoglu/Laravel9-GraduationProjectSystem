<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data  = Project::all();
        return view('admin.project.index',[
          'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $data  = Category::all();
      return view('admin.project.create',[
        'data' => $data
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Project();
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id();
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->videlink = $request->videlink;
        $data->status = $request->status;
        if($request->file('image')){
          $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, $id)
    {
      $data  = Project::find($id);
      return view('admin.project.show',[
        'data' => $data
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, $id)
    {
      $data  = Project::find($id);
      $datalist = Category::all();
      return view('admin.project.edit',[
        'data' => $data,
        'datalist' => $datalist
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project, $id)
    {
      $data  = Project::find($id);
      $data->category_id = $request->category_id;
      //$data->user_id = Auth::id();
      $data->title = $request->title;
      $data->keywords = $request->keywords;
      $data->description = $request->description;
      $data->detail = $request->detail;
      $data->videlink = $request->videlink;
      $data->status = $request->status;
      if($request->file('image')){
        $data->image = $request->file('image')->store('images');
      }
      $data->save();
      return redirect('admin/project');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, $id)
    {
        $data  = Project::find($id);
        $comment = Comment::where('project_id',$id);
        if ($data->image && Storage::disk('public')->exists($data->image)){
          Storage::delete($data->image);
        }
        $data->delete();
        $comment->delete();
        return redirect('admin/project');

    }

    public function ImageDestroy(Project $project, $id)
    {
          $data  = Project::find($id);
          if($data->image){
            Storage::delete($data->image);
            $data->image = null;
            $data->save();
            return redirect('admin/project/edit/'.$id);
          }
          else {
            echo '<script type ="text/JavaScript">';
            echo 'alert("Resim zaten yok!")';
            echo '</script>';
            header("refresh:1;url=../../../admin/project/edit/$id");
          }
    }
}
