<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index()
    {
        $movies =array('Black Adam', 'Tricket to Paradise', 'The Bad Guys');
        return view('index', compact('movies'));
        //this gets sent to the index page using bidings
    }
}

