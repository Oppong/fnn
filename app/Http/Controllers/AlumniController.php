<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumni;

class AlumniController extends Controller
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
        $upevents = Alumni::all();
        return view('admin.alumni.index', compact('upevents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alumni.create');
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

             'title' => 'required',
             'content' => 'required',
             'date' => 'required',
             'time' => 'required',
             'venue' => 'required',

        ]);

        $upevent = Alumni::create([

            'title' => request('title'),
            'content' => request('content'),
            'date' => request('date'),
            'time' => request('time'),
            'venue' => request('venue'),

        ]);

        return redirect()->route('alumni.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $upevent = Alumni::find($id);

        return view('admin.alumni.edit', compact('upevent'));
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

             'title' => 'required',
             'content' => 'required',
             'date' => 'required',
             'time' => 'required',
             'venue' => 'required',

        ]);

        $upevent = Alumni::findOrFail($id)->update([

            'title' => request('title'),
            'content' => request('content'),
            'date' => request('date'),
            'time' => request('time'),
            'venue' => request('venue'),

        ]);

        return redirect()->route('alumni.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $upevent = Alumni::find($id);

        $upevent->delete();

        return redirect()->route('alumni.index'); 
    }
}
