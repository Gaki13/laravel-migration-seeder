<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Train;

class HomeController extends Controller
{
    public function index(){
        $train=Train::where('departure_date', 'current_date');

        return view('home', compact('train'));
    }
}
