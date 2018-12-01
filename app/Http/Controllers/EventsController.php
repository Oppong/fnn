<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Upevent;

class EventsController extends Controller
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
        $upevents = Upevent::all();
        return view('admin.upevent.index', compact('upevents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.upevent.create');
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

        $upevent = Upevent::create([

            'title' => request('title'),
            'content' => request('content'),
            'date' => request('date'),
            'time' => request('time'),
            'venue' => request('venue'),

        ]);

        return redirect()->route('upevent.index');
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
        //
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
    }
}
