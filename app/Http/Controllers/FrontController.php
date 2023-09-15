<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function aboute(){
        return view('front.about');
    }
    public function serves(){
        return view('front.serves');
    }
    
}
