<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function home(){

        $trains = Train::where('departure_time', '>=', now())
               ->orderBy('departure_time', 'asc')
               ->get();

    
        return view("home", compact("trains"));
    }
}
