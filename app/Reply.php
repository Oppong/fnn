<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Comment;

class Reply extends Model
{
    //

     protected $fillable = ['name', 'body'];

    public function comment() {

		return $this->belongsTo(Comment::class);
	}
}
