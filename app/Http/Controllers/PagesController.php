<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;
use App\Gallery;
use App\Post;
use App\Upevent;
use App\Alumni;

use App\Listed;
use App\Gale;

class PagesController extends Controller
{
    //

    public function index() {

    	$sliders = Slider::all();
    	$gallery = Gallery::latest()->take(9)->get();
    	$posts = Post::latest()->take(3)->get();
    	$upevent = Upevent::latest()->take(3)->get();


    	return view('pages.index', compact('sliders', 'gallery', 'posts', 'upevent'));
    }


    public function about() {

    	$gallery = Gallery::latest()->take(9)->get();
    	return view('pages.about', compact('gallery'));
    }

      public function contact() {
    	
    	$gallery = Gallery::latest()->take(9)->get();
    	return view('pages.contact', compact('gallery'));
    }

    public function alumni() {
    	
    	$gallery = Gallery::latest()->take(9)->get();
    	$alumni = Alumni::latest()->take(4)->get();
    	$lists = Listed::all();
    	return view('pages.alumni', compact('gallery', 'alumni', 'lists'));
    }


  public function gallery() {
    	
    	$gallery = Gallery::latest()->take(9)->get();
    	$gales = Gale::all();
    	$gall = Gallery::latest()->take(8)->get();
    	return view('pages.gallery', compact('gallery', 'gales', 'gall'));
    }




    //emails here 
     public function store(Request $request) {

    	//valdiate

     	$request->validate([

     		'name' => 'required',
     		'email' => 'required|email',
     		'subject' => 'required',
     		'message' => 'required'

     	]);

     // pass in an array 
     	$data = array(

     		'name' => request('name'),
     		'email' => request('email'),
     		'subject' => request('subject'),
     		'bodymessage' => request('message'),

     	);

     // send to mail

     	\Mail::send('emails.contact', $data, function($message) use($data) {

     		$message->from($data['email']);
     		$message->to('gnaasudswacampus@gmail.com');
    		$message->subject($data['subject']);

     	});

    	return redirect('/contact');

    }
}
