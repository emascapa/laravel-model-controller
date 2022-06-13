<?php

namespace App\Http\Controllers;

use App\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    //
    public function index()
    {
        $movies = Movie::all();
        //dd($movies);
        return view('home', compact('movies'));
    }
}

/* 
//test: aggiungo un altro film
$film = new Movie();
$film->title = 'Donnie Darko';
$film->original_title = 'Donnie Darko';
$film->nationality = 'USA';
$film->date = '2000-09-03';
$film->vote = '8.2';

$film->save(); */

