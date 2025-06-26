<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Category;

class PageController extends Controller
{
    
    public function home()
    {
        $carousel=Carousel::OrderBy('created_at','DESC')->take(3)->get();
        $categories=Category::OrderBy('created_at','DESC')->take(6)->get();
        return view('home',
    [
        'carousel'=>$carousel,
        'categories'=>$categories
    ]);
    }
}
