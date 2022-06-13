<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;

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

    public function user(){
      return $this->belongsTo(User::class,'user_id');
    }

    public function evaluation(){
      return $this->hasMany(Evaluation::class);
    }

}
