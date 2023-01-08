<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('frontoffice.pages.index');
    }

    public function services(){
        return view('frontoffice.pages.services');
    }

    public function contact(){
        return view('frontoffice.pages.contact');
    }

    public function about(){
        return view('frontoffice.pages.about');
    }

}
