<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('home');
    }

    public function hero(){
        return view('components.hero');
    }


    public function about(){
        return view('components.about');
    }

    public function resume(){
        return view('components.resume');
    }

    public function contact(){
        return view('components.contact');
    }
}
