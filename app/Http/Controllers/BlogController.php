<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

use Image;

class BlogController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        $blogs = Post::paginate(10);

        return view('admin.blog.index', compact('categories', 'blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        $categories = Category::all();

        $blogs = Post::paginate(10);

        return view('admin.blog.create', compact('categories', 'blogs'));
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


        $request->validate([

            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required|integer'
        ]);


        $posts = new Post;

        $posts->title = $request->title;
        $posts->body = $request->body;
        $posts->category_id = $request->category_id;

        //now on image

        $image = $request->file('image');

        $filename = time(). '.'. $image->getClientOriginalExtension();

        $location = public_path('img/'.$filename);

        Image::make($image)->resize(380, 250)->save($location);

        $posts->image = $filename;

        $posts->save();


        return redirect()->route('blogs.index');
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
        $blog = Post::find($id);

         $categories = Category::all();

        return view('admin.blog.show', compact('blog', 'categories'));
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


         $blog = Post::find($id);

         $categories = Category::all();

         return view('admin.blog.edit', compact('blog', 'categories'));
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

          $request->validate([

            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required|integer'
        ]);


        $posts =  Post::find($id);

        $posts->title = $request->title;
        $posts->body = $request->body;
        $posts->category_id = $request->category_id;

        //now on image

        $image = $request->file('image');

        $filename = time(). '.'. $image->getClientOriginalExtension();

        $location = public_path('img/'.$filename);

        Image::make($image)->resize(380, 250)->save($location);

        $posts->image = $filename;

        $posts->save();

        return redirect()->route('blogs.index');
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

        $blog = Post::find($id);

        $blog->delete();

        return redirect()->route('blogs.index');
    }
}
