<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Post;

use App\Reply;

class Comment extends Model
{
    //
   protected $fillable = ['name', 'body'];

   
	public function post() {

		return $this->belongsTo(Post::class);
	}


	public function replies() {

		return $this->hasMany(Reply::class);
	}

}
