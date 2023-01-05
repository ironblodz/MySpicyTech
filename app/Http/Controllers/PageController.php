<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('frontoffice.pages.index');
    }

    public function contact(){
        return view('frontoffice.pages.contact');
    }
}
