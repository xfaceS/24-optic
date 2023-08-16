<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Opticien;
use Illuminate\Http\Request;

class MagasinController extends Controller
{
    function index(Request $request){
        if($request->get('opticien')){
            $opticiens = Opticien::where('name',"LIKE","%".$request->get('opticien')."%")->paginate(15);
        }else{
            $opticiens = Opticien::orderBy('created_at','desc')->paginate(15);
        }
        
        return view('pages.magasins',compact('opticiens'));
    }

    function show($slug){
        $opticien = Opticien::where('slug',$slug)->firstOrFail();
        return view('pages.magasin',compact('opticien'));
    }
}
