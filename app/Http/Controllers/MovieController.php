<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movieInfo = Movie::all();
        dd($movieInfo);
        return view('movie', compact('movieInfo'));
    }
}
