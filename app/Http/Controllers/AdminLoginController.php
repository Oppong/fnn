<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;

class AdminLoginController extends Controller
{
    //

    public function __construct() {

    	$this->middleware('guest:admin');
    }

    public function adminLoginForm() {

    	return view('auth.adminlogin');
    }


    public function adminstore(Request $request) {

    	// validate admin

    	$request->validate([
    		'email' => 'required|email',
    		'password' => 'required|min:6'

    	]);


    	// attempt the log user in 

    	if (\Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
    		# if succsessfull redirect them to the admin dashboard

    		return redirect()->intended(route('admin.ash'));
    	}

    	return redirect()->back();

    	 

    }
}
