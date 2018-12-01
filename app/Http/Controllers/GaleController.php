<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gale;

class GaleController extends Controller
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
        
        $category = Gale::all();

        return view('admin.gale.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gale.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
          $request->validate([

            'name' => 'required'

        ]);

        $category = new Gale();

        $category->name = $request->name;

        $category->save();

        return redirect()->route('gale.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Gale::find($id);

         return view('admin.gale.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $category = Gale::findOrFail($id);

         return view('admin.gale.edit', compact('category'));
        
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
        
             $request->validate([

             'name' => 'required',

        ]);


        $category = Gale::find($id);

        $category->name = $request->name;

        $category->save();

        return redirect()->route('gale.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $category = Gale::find($id);

         $category->delete();

         return redirect()->route('gale.index');
    }
}
