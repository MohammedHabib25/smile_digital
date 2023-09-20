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
    public function policy(){
        return view('front.policy');
    }
    
    public function terms(){
        return view('front.terms');
    }
    public function graf(){
        return view('work.graf');
    }
    public function prog(){
        return view('work.prog');
    }
    public function mark(){
        return view('work.mark');
    }
    
}
