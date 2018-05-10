<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function welcome(){
    return view('welcome');
}

    public function mainpage(){
        return view('mainpage');
    }

    public function about()
    {
        return view('information.about');
    }


}
