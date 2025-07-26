<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Gallery;

class PageController extends Controller
{
    
    public function home()
    {
        $carousel=Carousel::OrderBy('created_at','DESC')->take(3)->get();
        //return $carousel;
        $categories=Category::OrderBy('created_at','DESC')->take(6)->get();
        $galleries=Gallery::OrderBy('created_at','DESC')->take(8)->get();
        return view('home',
    [
        'carousel'=>$carousel,
        'categories'=>$categories,
        'galleries'=>$galleries
    ]);
    }
}
