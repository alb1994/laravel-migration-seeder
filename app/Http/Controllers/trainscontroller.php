<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\trains;

class trainscontroller extends Controller
{
    public function index (){
        $trains = trains::all();  
        dd($trains);
        return view('home');  
    }
}
