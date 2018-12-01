<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

use App\Admin;

class AdminUserController extends Controller
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
        $users = Admin::paginate(10);

        return view('admin.adminuser.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Geting all roles and passing to view

        $roles = Role::get();

        return view('admin.adminuser.create', compact('roles'));

        return redirect()->route('adminusers.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate request
         $request->validate([

            'name' => 'required',
            'email' => 'required|email|',
            'password' => 'required|confirmed',

        ]);


   // create user for admin
        $user = Admin::create([

                'name' => request('name'),
                'email' => request('email'),
                'password' => request('password'),

        ]);

    // roles for user

        $roles = $request['roles']; //Retrieving the roles field
    //Checking if a role was selected
        if (isset($roles)) {

            foreach ($roles as $role) {
                 $role_r = Role::where('id', '=', $role)->firstOrFail();            
                 $user->assignRole($role_r); //Assigning role to user
               }

        }        


        return redirect()->route('adminusers.index');
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
        $roles = Role::get(); //Get all roles

        $user = Admin::find($id);
        return view('admin.adminuser.show', compact('user', 'roles'));

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

        $roles = Role::get(); //Get all roles

         $user = Admin::find($id);

        return view('admin.adminuser.edit', compact('user', 'roles'));
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

         $user = Admin::findOrFail($id); //Get role specified by id

        //validate
         $request->validate([

            'name' => 'required',
            'email' => 'required|email|',
            'password' => 'required|confirmed',

        ]);

     
     // update user with role

         // $user = Admin::find($id)->update([

         //        'name' => request('name'),
         //        'email' => request('email'),
         //        'password' => bcrypt(request('password')),
         // ]);
             

           $input = $request->only(['name', 'email', 'password' ]); //Retreive the name, email and password fields

         $roles = $request['roles']; 
        $user->fill($input)->save();

        if (isset($roles)) {        
            $user->roles()->sync($roles);  //If one or more role is selected associate user to roles          
        }        
        else {
            $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }

        return redirect()->route('adminusers.index');
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

         $user = Admin::find($id);

        $user->delete();

        return redirect()->route('adminusers.index');   
    }
}
