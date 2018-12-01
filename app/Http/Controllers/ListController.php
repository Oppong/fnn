<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Listed;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $lists = Listed::paginate(10);

        return view('admin.list.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.list.create');
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

                'name' => 'required',
                'year' =>  'required|integer'
        ]);


        $lists = Listed::create([

            'name' => request('name'), 

            'year' => request('year')

        ]);

        return redirect()->route('lists.index');
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

        $list = Listed::find($id);

        return view('admin.list.edit', compact('list'));
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

                'name' => 'required',
                'year' =>  'required|integer'
        ]);


        $lists = Listed::find($id);

        $lists->name = $request->name;

        $lists->year = $request->year;

        $lists->save();

        return redirect()->route('lists.index');
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

        $list = Listed::find($id);

        $list->delete();

        return back();
    }
}
