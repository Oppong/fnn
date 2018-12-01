<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reply;

use App\Comment;

class ReplyController extends Controller
{
    //

    public function store(Request $request, $comment_id) {

			$request->validate([

				'name' => 'required',

				'body' => 'required'

			]);


			$comments = Comment::find($comment_id);

			$reply = new Reply;

			$reply->name = $request->name;

			$reply->body = $request->body;

			$reply->comment()->associate($comments);

			$reply->save();

			return back();
		}
}
