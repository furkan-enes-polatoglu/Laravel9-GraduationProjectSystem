<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard() { return view('/admin/index'); }
    public function category() { return view('/admin/category'); }



}
