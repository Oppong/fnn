<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;

use App\Comment;

class Post extends Model
{
    protected $fillable = ['title', 'image', 'body'];

    public function category() {

    	return $this->belongsTo(Category::class);
    }

     public function comments() {

    	return $this->hasMany(Comment::class);
    }
}
