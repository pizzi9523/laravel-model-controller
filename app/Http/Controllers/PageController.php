<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // return view home
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}