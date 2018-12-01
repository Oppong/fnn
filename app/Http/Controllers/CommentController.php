<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

use App\Post;

class CommentController extends Controller
{
    //

    public function store(Request $request, $post_id) {

    	$request->validate([

    			'name' => 'required',

    			'body' => 'required'
    	]);


    	$post = Post::find($post_id);

    	$comments = new Comment();

    	$comments->name = $request->name;
    	$comments->body  = $request->body;

    	$comments->post()->associate($post);

    	$comments->save();

    	return back();
    }
}
