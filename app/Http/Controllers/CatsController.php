<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Slider;

use App\Gallery;

use App\Gale;

class CatsController extends Controller
{
    //

    public function show(Category $category) {

        $sliders = Slider::all();
        $gallery = Gallery::all();
    	return view('pages.catshow', compact('category', 'sliders', 'gallery'));
    }


    public function galleryshow(Gale $gale) {

    
        $gallery = Gallery::all();
    	return view('pages.galleryshow', compact('gale', 'gallery'));
    }
}
