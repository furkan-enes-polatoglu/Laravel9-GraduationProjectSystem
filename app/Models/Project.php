<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;

class Project extends Model
{
    use HasFactory;

    # Many To One
    public function category(){
      return $this->belongsTo(Category::class);
    }

    public function comment(){
      return $this->hasMany(Comment::class,'project_id');
    }




}
