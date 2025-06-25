<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Carousel;

class PageController extends Controller
{
    
    public function home()
    {
        $carousel=Carousel::OrderBy('title','DESC')->take(3)->get();
        return view('home',
    [
        'carousel'=>$carousel
    ]);
    }
}
