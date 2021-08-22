<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $genre = getGenre();
        return view('site.list')->with(compact('genre'));
    }
}
