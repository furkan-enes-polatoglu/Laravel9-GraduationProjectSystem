<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
      $data  = Project::all();
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
        $data = new Category();
        $data->parent_id = $request->parent_id;
        $data->title = $request->baslik;
        $data->keywords = $request->anahtarKelime;
        $data->description = $request->aciklama;
        $data->status = $request->status;
        if($request->file('image')){
          $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, $id)
    {
      $data  = Project::find($id);
      return view('admin.project.show',[
        'data' => $data
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
      $data  = Project::find($id);
      $datalist = Project::all();
      return view('admin.project.edit',[
        'data' => $data,
        'datalist' => $datalist
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
      $data  = Project::find($id);
      $data->parent_id = $request->parent_id;
      $data->title = $request->baslik;
      $data->keywords = $request->anahtarKelime;
      $data->description = $request->aciklama;
      $data->status = $request->status;
      if($request->file('image')){
        $data->image = $request->file('image')->store('images');
      }
      $data->save();
      return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        $data  = Project::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/category');

    }

    public function ImageDestroy(Category $category, $id)
    {
          $data  = Project::find($id);
          if($data->image){
            Storage::delete($data->image);
            $data->image = null;
            $data->save();
            return redirect('admin/category/edit/'.$id);
          }
          else {
            echo '<script type ="text/JavaScript">';
            echo 'alert("Resim zaten yok!")';
            echo '</script>';
            header("refresh:1;url=../../../admin/category/edit/$id");
          }
    }
}
