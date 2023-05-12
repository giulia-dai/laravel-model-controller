<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // filtra tutti i film
        $movies = Movie::all();

        // filtra solo i film con voto > 9
        //$movies = Movie::where('vote', '>', 9)->get();
        return view('home', compact('movies'));
    }
}
