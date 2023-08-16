<?php

namespace App\Http\Controllers;

use App\Models\CategoryNews;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $news = News::orderBy('created_at','desc')->paginate(15);
        return view('pages.news',compact('news'));
    }

    function show($slug){
        $new = News::where('slug',$slug)->firstOrFail();
        // dd($new);
        return view('pages.new',compact('new'));
    }
}
