<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $sliders = Slider::all();
        return view('pages.home',compact('sliders'));
    }
}
