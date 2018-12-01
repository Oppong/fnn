<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

use App\Gallery;

class PostController extends Controller
{
    //

    public function index() {

    	$posts = Post::paginate(4);

    	$recent = Post::latest()->take(5)->get();

    	$category = Category::all();

    	$gallery = Gallery::latest()->take(9)->get();

    	return view('posts.index', compact('posts', 'category', 'recent', 'gallery'));
    }

    public function show(Post $post) {

    	$gallery = Gallery::latest()->take(9)->get();

    	return view('posts.show', compact('post', 'gallery'));
    }
}
