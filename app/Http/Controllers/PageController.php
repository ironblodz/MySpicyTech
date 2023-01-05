<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('frontoffice.pages.index');
    }

<<<<<<< Updated upstream
    public function contact(){
        return view('frontoffice.pages.contact');
    }
=======
    public function about(){
        return view('frontoffice.pages.about');
    }

>>>>>>> Stashed changes
}
