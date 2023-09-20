<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoyController extends Controller
{
    public function index(){
        return view('en.index');
    }
    public function about(){
        return view('en.about');
    }
    public function terms(){
        return view('en.terms');
    }
    public function policy(){
        return view('en.policy');
    }
    public function serves(){
        return view('en.serves');
    }
    public function work(){
        return view('en.work');
    }
    public function graf(){
        return view('en.work');
    }
    public function prog(){
        return view('en.prog');
    }
    public function mark(){
        return view('en.mark');
    }
}
