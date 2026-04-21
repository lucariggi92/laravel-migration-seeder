<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){

    $treni =["italo", "regionale"];
        return view("home", compact("treni"));
    }
}
