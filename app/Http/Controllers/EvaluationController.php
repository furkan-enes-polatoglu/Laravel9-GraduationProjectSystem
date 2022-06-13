<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RoleUser;;
use App\Models\Project;
use App\Models\Setting;


class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function grading()
     {
       $evaluation = Evaluation::all();
       $project = Project::all();
       $faculty = RoleUser::select('user_id')->where('role_id','5')->get();
       $student = RoleUser::select('user_id')->where('role_id','2')->get();
       $setting = Setting::first();
       return view('home.faculty.grading',[
         'setting'=>$setting,
         'faculty'=>$faculty,
         'student'=>$student,
         'evaluation'=>$evaluation,
         'project'=>$project

       ]);
     }

     public function givegrade(Request $request, $id)
     {
       $data = Evaluation::find($id);
       $data->grade = $request->grade;
       $data->status = "True";
       $data->save();
       return redirect('facultypanel/grading');
     }


     public function evaluation()
     {
       $evaluation = Evaluation::all();
       $project = Project::all();
       $setting = Setting::first();
       return view('admin.evaluation',[
         'setting'=>$setting,
         'evaluation'=>$evaluation,
         'project'=>$project
     ]);
   }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
