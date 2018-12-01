<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;

class SettingsController extends Controller
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
        //

        $settings = Setting::all();

        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
            'linkedin' => 'required'

        ]);

        $settings = new Setting();

        $settings->meta_description = $request->meta_description;
        $settings->meta_keyword = $request->meta_keyword;
        $settings->email = $request->email;
        $settings->phone = $request->phone;
        $settings->address =  $request->address;
        $settings->twitter = $request->twitter;
        $settings->facebook = $request->facebook;
        $settings->instagram = $request->instagram;
        $settings->youtube = $request->youtube;
        $settings->linkedin = $request->linkedin;

        $settings->save();

        // added redirects

        return redirect()->route('settings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Setting $id)
    {
        $setting = Setting::find($id);

        return view('admin.settings.show', compact('setting'));
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

          $request->validate([

            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
            'linkedin' => 'required'

        ]);

        $settings = Setting::find($id);

        $settings->meta_description = $request->meta_description;
        $settings->meta_keyword = $request->meta_keyword;
        $settings->email = $request->email;
        $settings->phone = $request->phone;
        $settings->address =  $request->address;
        $settings->twitter = $request->twitter;
        $settings->facebook = $request->facebook;
        $settings->instagram = $request->instagram;
        $settings->youtube = $request->youtube;
        $settings->linkedin = $request->linkedin;

        $settings->save();

        // added redirects

        return redirect()->route('settings.index');
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
