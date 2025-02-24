<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the homepage.
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * Display the Europa International General Knowledge Olympiad page.
     */
    public function euroigko()
    {
        return view('frontend.euro_igko');
    }
    public function class_1(){
        return view('frontend.class_1');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function about(){
        return view('frontend.about');
    }
}
