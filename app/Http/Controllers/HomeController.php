<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index( ){
    return view ('home');
}

public function about( ){
    return view ('aboutus');
}


public function contact( ){
    return view ('contactus');
}


public function service( ){
    return view ('service');
}

}
