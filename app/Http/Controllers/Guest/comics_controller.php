<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\comic;
class comics_controller extends Controller
{
    public function index(){
        $comic= comic::all();
        return view('home', compact('comic'));
    }
}
