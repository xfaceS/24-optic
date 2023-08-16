<?php

namespace App\Http\Controllers;

use App\Models\Advertising;
use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $sliders = Slider::all();
        $news = News::orderBy('created_at','desc')->limit(5)->get();
        $news_long = News::orderBy('created_at','desc')->limit(15)->get();
        $ads = Advertising::whereColumn('limit_click', '>' ,'nb_click')->limit(3)->get();
        return view('pages.home',compact('sliders','news','news_long','ads'));
    }
}
